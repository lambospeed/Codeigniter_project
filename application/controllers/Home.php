<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('home_model');
	}

	public function index()
	{
		$whereL = "is_deleted = 0";
		$languages = $this->baseM->getAllListData(TBL_LANGUAGES, $whereL);

		$whereC = "is_deleted = 0 and parent_id = 0";
		$our_services = $this->baseM->getAllListData(TBL_CATEGORY, $whereC);

		$data['our_services'] = $our_services;
		$data['languages'] = $languages;
		$this->_showPage($data);
	}
	
	public function register() {
		$post_data = $_POST;
		$password = $this->input->post('up_password');
		$confirm_pass = $this->input->post('up_confirmpass');
		$email = $this->input->post('up_email');

		if ($password != $confirm_pass) {
			echo $this->json([], 'error', "Password confirmation is invalid");
		}
		else {
			$where = array('email'	=> $email);
			$user_data = $this->baseM->getOneRowData('user', $where);
			if (count($user_data) > 0){
				echo $this->json([], 'error', "The same name user already exists.");
			}
			else {
				$data = array(
					'email'			=> $email,
					'password'		=> md5($password),
					'registration_date'	=> date('m-d-Y h:i:s')
				);
				if (isset($post_data['up_name'])){
					$data['first_name'] = $post_data['up_name'];
				} else {
					$data['first_name'] = $post_data['up_first_name'];
					$data['last_name'] = $post_data['up_last_name'];
				}
				$this->baseM->insertData('user', $data);
				echo $this->json([], 'success', '');
			}
		}
	}

	public function login() {
		$email = $this->input->post('login_email');
		$password = $this->input->post('login_password');
		$where = array(
			'email'			=> $email,
			'is_deleted'	=> 0
		);
		$userdata = $this->baseM->getOneRowData('user', $where);

		if(count($userdata) > 0) {
			if ($userdata['is_deleted'] > 0){
				echo $this->json([], 'error', "Your account is deleted. Please call me Admin");
			}
			else {
				if(md5($password) == $userdata['password']){
					$data = array(
						'user_id'	=> $userdata['id'],
						'email'		=> $userdata['email'],
						'registration_date'	=> $userdata['registration_date']
					);
					$this->session->set_userdata($data);
					$encryp_userid = base64_encode($userdata['id']);
					echo $this->json(['user_id' => $encryp_userid], 'success', 'Successfully login');
				}
				else {
					echo $this->json([], 'error', "Your email or password is invalid.");
				}
			}
		}
		else {
			$this->json([], 'error', "Your email or password is invalid.");
		}
	}

	public function getKeywordsName() {
		$keywords = $this->home_model->getKeywordsName();
		echo json_encode($keywords);
	}
}
