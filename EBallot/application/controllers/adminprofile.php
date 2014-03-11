<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminProfile extends ParentController 
{
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->Session_Model->setBaseUrl(base_url());

		self::checkAdminLogin();
		
		self::loadView('admin_view', 'Admin');
	}

	public function createElection()
	{
		self::checkAdminLogin();

		if($this->input->post('createElection'))
			$this->Election_Model->createElection($this->input->post('electionName'));
		self::loadView('admin_view', 'Admin');
	}
}