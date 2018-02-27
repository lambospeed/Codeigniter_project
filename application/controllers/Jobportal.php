<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobportal extends Base_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index() {}

	public function job_search() 
	{
		$jobs = $this->baseM->getAllListData(TBL_JOB);
		
		$data['jobs'] = $jobs;
		$this->_showPage($data,'job_search');
	}

	public function job_offers() 
	{
		$jobs = $this->baseM->getAllListData(TBL_JOB);
		
		$data['jobs'] = $jobs;
		$this->_showPage($data,'job_offers');
	}
}
	
