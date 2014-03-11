<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminMain extends ParentController
{

	function __construct(){
		parent::__construct();
	}

	public function index($status = 0)
	{
		$this->Session_Model->setBaseUrl(base_url());

		if($this->Session_Model->isAdminLoggedIn())
			redirect('/adminprofile');

		self::loadView('adminmain_view', 'Admin Login');
	}

	public function login()
	{
		if($this->input->post('login'))
		{
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() !== false)
			{
				if($this->Session_Model->verifyAdminLogin( $this->input->post('password')))
				{
					$this->Session_Model->loginAdmin();
					redirect('/adminprofile');
				}
				else
					$data['error'] = "Invalid Password.<br/>";
			}
		}

		self::loadView('adminmain_view', 'Admin Login');
	}

	public function logout()
	{
		if($this->input->post('logout'))
			$this->Session_Model->logoutAdmin();

		self::loadView('adminmain_view', 'Admin Login');
	}
}