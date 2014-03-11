<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ParentController extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library('form_validation');
		$this->load->model('User_Model');
		$this->load->model('Election_Model');
		$this->load->model('Session_Model');
	}

	public function checkUserLogin()
	{
		if(!$this->Session_Model->isUserLoggedIn())
			redirect('main/index/1');
	}

	public function checkAdminLogin()
	{
		if(!$this->Session_Model->isAdminLoggedIn())
			redirect('adminmain/index/1');
	}

	public function loadView($view = 'main', $title = 'EBallot')
	{
		$data['session_model'] = $this->Session_Model;
		$data['election_model'] = $this->Election_Model;
		$data['user_model'] = $this->User_Model;
		$data['title'] = $title;

		$this->load->view('templates/header', $data);
		$this->load->view($view, $data);
	}
}