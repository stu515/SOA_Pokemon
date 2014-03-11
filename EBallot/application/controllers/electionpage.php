<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ElectionPage extends ParentController 
{

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->Session_Model->setBaseUrl(base_url());

		self::checkAdminLogin();
		self::loadView('electionpage_view', 'Edit Election');
	}

	public function addCandidate()
	{
		self::checkAdminLogin();

		if($this->input->post('addCandidate'))
			$this->Election_Model->addCandidate($this->Session_Model->getElection(), $this->input->post('userCandidate'), $this->input->post('platform'));
		self::loadView('electionpage_view', 'Edit Election');
	}

	public function removeCandidate()
	{
		self::checkAdminLogin();

		if($this->input->post('removeCandidate'))
			$this->Election_Model->removeCandidate($this->Session_Model->getElection(), $this->input->post('removeUser'));
		self::loadView('electionpage_view', 'Edit Election');
	}

	public function setElection()
	{
		if($this->input->post('setElection'))
			$this->Session_Model->setElection($this->input->post('election_id'));
		
		self::checkAdminLogin();

		self::loadView('electionpage_view', 'Edit Election');
	}

	public function openElection()
	{
		if($this->input->post('openElection'))
		{
			$this->Election_Model->openElection($this->Session_Model->getElection());
			$this->Session_Model->unsetElection();
			redirect('adminprofile');
		}
	}

	public function checkAdminLogin()
	{
		if(!$this->Session_Model->isElectionSet() || !$this->Session_Model->isAdminLoggedIn())
			redirect('adminprofile');
	}


}