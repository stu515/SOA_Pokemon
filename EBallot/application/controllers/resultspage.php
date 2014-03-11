<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ResultsPage extends ParentController 
{

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->Session_Model->setBaseUrl(base_url());

		self::checkAdminLogin();

		self::loadView('resultspage_view', 'Results');
	}

	public function setElection()
	{
		if($this->input->post('setElection'))
			$this->Session_Model->setElection($this->input->post('election_id'));

		self::checkAdminLogin();
		self::loadView('resultspage_view', 'Results');
	}

	public function checkAdminLogin()
	{
		if(!$this->Session_Model->isElectionSet() || !$this->Session_Model->isAdminLoggedIn())
			redirect('adminprofile');
	}


}