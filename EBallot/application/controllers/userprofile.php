<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfile extends Parentcontroller 
{

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->Session_Model->setBaseUrl(base_url());

		self::checkUserLogin();

		self::loadView('profile_view', 'User Profile');
	}
}