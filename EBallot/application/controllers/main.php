<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends ParentController 
{

	function __construct(){
		parent::__construct();
	}

	public function index($status = 0)
	{
		$this->Session_Model->setBaseUrl(base_url());

		if($this->Session_Model->isUserLoggedIn())
			redirect('/userprofile');

		self::loadView('main_view', "Log In");
	}

	public function login()
	{
		if($this->input->post('login'))
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === false) {}
			else
			{
				if($this->Session_Model->verifyUserLogin($this->input->post('username'), $this->input->post('password')))
				{
					$this->Session_Model->logUser($this->input->post('username'));
					redirect('/userprofile');
				}
				else
					echo "Invalid Password.<br/>";
			}
		}

		self::loadView('main_view', "Log In");
	}

	public function logout()
	{
		if($this->input->post('logout'))
			$this->Session_Model->logoutUser();
		self::loadView('main_view', "Log In");
	}
}