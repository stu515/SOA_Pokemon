<?php
class Test extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('test_model');
	}
	
	public function index()
	{
		//echo "Hello World!";
		$data['base']=$this->config->item('base_url');
		$data['title']= 'Message form';
		$this->load->helper('form');
		$this->load->view('test_view', $data);

	}
	
	public function login()
	{
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		
		$result=$this->test_model->login($username,$password);
		$this->index();
	}
	
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		//$this->test_model->add_user();
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->test_model->add_user();
			//$echo "hi";
		//$this->thank();
		}
	}
	
	public function logout()
	{
		$newdata = array(
		'user_id' =>'',
		'user_name' =>'',
		'user_email' =>'',
		'logged_in' => FALSE,
	);
	$this->session->unset_userdata($newdata);
	$this->session->sess_destroy();
	$this->index();
	/**public function show($username)
	{
		$this->load->model('test_model');
		$test = $this->test_model->get_info($username);
		$data['username'] = $test['username'];
		$this->load->view('test_view', $data);
	}*/
	}
}
?>