<?php
class Test_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function login($username,$password)
	{
		$this->load->library('session');
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		
		$query=$this->db->get("user");
		if($query->num_rows()>0)
		{
			foreach($query->result() as $rows)
			{
				$newdata = array(
					'user_id' => $rows->id,
					'user_name' => $rows->username,
					'user_email' => $rows->email,
					'logged_in' => TRUE,
				);
			}
			//$this=&get_instance();
			$this->session->set_userdata($newdata);
			return true;
		}
		return false;
	}

	public function add_user()
	{
		$data=array(
		'username'=>$this->input->post('user_name'),
		'email'=>$this->input->post('email_address'),
		'password'=>md5($this->input->post('password'))
		);
		$this->db->insert('user',$data);
	}
}
?>
