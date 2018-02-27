<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postjob extends Base_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('post_model');
	}

	public function index()
	{
		$keyword = $this->input->post('hdrkeyword');
		$match_data = array();
		if (!empty($keyword)) {
			$match_data = $this->post_model->getMacthdataBykeyword($keyword);
		}

		$where = array("parent_id" => 0, "is_deleted" => 0);
		$data['categories'] = $this->baseM->getAllListData(TBL_CATEGORY, $where);

		if (isset($match_data[0])) {
			$cat_id = $match_data[0]['maincat_id'];
			$sub_id = $match_data[0]['category_id'];
			$data['sub_id'] = $sub_id;
			$data['cat_id'] = $cat_id;
		}
		
		$where1 = "parent_id > 0 and is_deleted = 0";
		if(isset($cat_id))
			$where1 .= " and parent_id = ".$cat_id;
		$data['sub_categories'] = $this->baseM->getAllListData(TBL_CATEGORY, $where1);
		$this->_showPage($data);
	}

	public function savejob()
	{
		$post_data = $this->input->post();
		if(empty($post_data['pro_title'])){
			echo $this->json(['back'=>3], 'error', 'Please Insert Project Title');
		} else if (empty($post_data['editorX'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Project Description');
		} else if (empty($post_data['mytext'][0])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Add tasks');
		} else if (empty($post_data['payment_type'])) {
			echo $this->json(['back'=>2], 'error', 'Please Select Payment Plan');
		} else if ($post_data['payment_type'] > 0) {
			if($post_data['payment_type'] == 1) {
				if(empty($post_data['buget_account'])){
					echo $this->json(['back'=>2], 'error', 'Please Insert Budget by fix');
				} elseif (!isset($post_data['Budget'])) {
					echo $this->json(['back'=>2], 'error', 'Please Select Payouts');
				} else {
					$this->post_model->setJob($post_data);
					echo $this->json([], 'success', '');
				}
			} elseif ($post_data['payment_type'] == 2) {
				if(empty($post_data['hourly_time'])) {
					echo $this->json(['back'=>2], 'error', 'Please Insert How much hours in Budget Hourly');
				} elseif (empty($post_data['hourly_rate'])) {
					echo $this->json(['back'=>2], 'error', 'Please Insert Price each Hour in Budget Hourly');
				} elseif (!isset($post_data['Budget'])) {
					echo $this->json(['back'=>2], 'error', 'Please Select Payout in Budget Hourly');
				} else {
					$this->post_model->setJob($post_data);
					echo $this->json([], 'success', '');
				}
			} elseif ($post_data['payment_type'] == 3) {
				if (!isset($post_data['Budget'])) {
					echo $this->json(['back'=>2], 'error', 'Please Select Payout in Agreement');
				} else {
					$this->post_model->setJob($post_data);
					echo $this->json([], 'success', '');
				}
			}
		}
	}

	public function getSubcatsById() 
	{
		$cat_id = $this->input->post('c_id');
		$where = 'is_deleted = 0 and parent_id = '.$cat_id;
		$sub_cats = $this->baseM->getAllListData(TBL_CATEGORY, $where);
		echo json_encode($sub_cats);
	}
}