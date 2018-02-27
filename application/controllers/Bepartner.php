<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bepartner extends Base_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$services = $this->baseM->getAllListData(TBL_SERVICES);
		$data['company_types'] = $this->baseM->getAllListData(TBL_COMPANY_TYPE);

		$where = "parent_id = 0 and is_deleted = 0";
		$data['categories'] = $this->baseM->getAllListData(TBL_CATEGORY, $where);

		$cat_id = $data['categories'][0]['id'];
		$where1 = "parent_id > 0 and is_deleted = 0 and parent_id = ".$cat_id;
		$data['sub_categories'] = $this->baseM->getAllListData(TBL_CATEGORY, $where1);
		$data['services'] = $services;
		// echo "<pre>";  print_r($this->session); exit;
		$this->_showPage($data);
	}

	public function savePartner() {
		$data = $this->input->post();
		
		if(empty($data['com_name'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Company Name');
		} 
		elseif (empty($data['em_city'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Employee City');
		} 
		elseif (empty($data['em_zipcode'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Employee ZIPcode');
		} 
		elseif (empty($data['em_address'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Employee Address');
		} 
		elseif (empty($data['com_phone'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Company Phone');
		} 
		elseif (empty($data['com_fax'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Company Fax');
		} 
		elseif (empty($data['com_email'])) {
			echo $this->json(['back'=>3], 'error', 'Please Insert Company Email');
		} 
		elseif (empty($data['own_firstname'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Owner Firstname');
		} 
		elseif (empty($data['own_lastname'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Owner Lastname');
		} 
		elseif (empty($data['own_stnr'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert STNR');
		} 
		elseif (empty($data['own_umst_id'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert UMST_ID');
		} 
		elseif (empty($data['own_hrbnumber'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert hrbnumber');
		} 
		elseif (empty($data['own_zipcode'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Owner Zipcode');
		} 
		elseif (empty($data['own_address'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Owner Address');
		} 
		elseif (empty($data['own_phone'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Owner Phone number');
		} 
		elseif (empty($data['own_mobile'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Owner Mobile number');
		}
		elseif (empty($data['own_email'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert hrbnumber');
		} 
		elseif (empty($data['ownername'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Owner Name');
		} 
		elseif (empty($data['bankname'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert Bank Name');
		} 
		elseif (empty($data['iban_num'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert IBAN number');
		} 
		elseif (empty($data['pic_num'])) {
			echo $this->json(['back'=>2], 'error', 'Please Insert PIC number');
		} 
		else {
			$insert_id = $this->baseM->insertData('partner', $data);

			$employee_data = array(
								"first_name" 		=> $data['own_firstname'],
								"last_name"			=> $data['own_lastname'],
								"email"				=> $data['com_email'],
								"phone"				=> $data['com_phone'],
								"country_id"		=> $data['com_country'],
								"city"				=> $data['com_city'],
								"address"			=> $data['em_address'],
								"street no"			=> $data['em_city'],
								"post_code"			=> $data['em_zipcode'],
								"email_confirmed"	=> $data['by_mail'],
								"status"			=> $data['own_stnr'],
								"registration_date"	=> $data['com_create_date'],
								"company_id"		=> $data['cat_id'],
							);

			$this->baseM->insertData('employee', $employee_data);

			echo $this->json([], 'success', ''); 
		}
	}
}
