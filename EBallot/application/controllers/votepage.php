<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VotePage extends ParentController 
{

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->Session_Model->setBaseUrl(base_url());

		self::checkUserLogin();
		self::loadView();
	}

	public function setElection()
	{
		if($this->input->post('setElection'))
			$this->Session_Model->setElection($this->input->post('election_id'));
		
		self::checkUserLogin();
		self::loadView();
	}

	public function submitVote()
	{
		self::checkUserLogin();

		if($this->input->post('submitVote'))
			$this->User_Model->insertVote($this->Session_Model->getLoggedInUserId(), $this->input->post('candidates'), $this->Session_Model->getElection());
		self::loadView();
	}

	public function loadView()
	{
		if($this->User_Model->hasVoted($this->Session_Model->getLoggedInUserId(), $this->Session_Model->getElection()))
			parent::loadView('receipt_view', 'Receipt');
		else
			parent::loadView('votepage_view', 'Ballot');
	}

	public function checkUserLogin()
	{
		if(!$this->Session_Model->isElectionSet() || !$this->Session_Model->isUserLoggedIn())
			redirect('userprofile');
	}


}