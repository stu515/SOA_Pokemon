<?php
class Session_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->database();
	}

	public function setBaseUrl($base)
	{
		$_SESSION['base'] = $base;
	}

	public function getBaseUrl()
	{
		return $_SESSION['base'];
	}

	public function verifyUserLogin($user_id, $password) 
	{
		$this->load->model('User_Model');
		$user_row = $this->User_Model->getUser($user_id);

		if ($user_row) 
		{
			$rpassword = $user_row['Password'];
			
			if($password === $rpassword) 
			{
				return true;
			}
			else 
				return false;
		}
		else 
			return false;
	}
	
	public function isUserLoggedIn()
	{
		return isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
	}

	public function logUser($user_id)
	{
		$_SESSION['logged_in'] = true;
		$_SESSION['logged_in_user'] = $user_id;
	}

	public function logoutUser()
	{
		$_SESSION['logged_in'] = false;
	}

	public function verifyAdminLogin($password)
	{
		if($password == 'admin')
			return true;
		return false;
	}

	public function isAdminLoggedIn()
	{
		return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'];
	}

	public function loginAdmin()
	{
		$_SESSION['admin_logged_in'] = true;
	}

	public function logoutAdmin()
	{
		$_SESSION['admin_logged_in'] = false;
	}

	public function getLoggedInUserId()
	{
		return $_SESSION['logged_in_user'];
	}

	public function setElection($election)
	{
		$_SESSION['election'] = $election;
	}

	public function getElection()
	{
		return $_SESSION['election'];
	}

	public function unsetElection()
	{
		unset($_SESSION['election']);
	}

	public function isElectionSet()
	{
		return isset($_SESSION['election']);
	}
}