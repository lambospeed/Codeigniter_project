<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends Base_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index() {
		$languages = $this->baseM->getAllListData(TBL_LANGUAGES);
		
		$where = "is_deleted = 0";
		$policy_terms = $this->baseM->getAllListData(TBL_POLICY_TERMS, $where);

		$data['policy_terms'] = $policy_terms;
		$data['languages'] = $languages;
		$this->_showPage($data);
	}
}
