<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyservices extends Base_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$services = $this->baseM->getAllListData(TBL_SERVICES);
		$data['services'] = $services;
		$this->_showPage($data);
	}
}
