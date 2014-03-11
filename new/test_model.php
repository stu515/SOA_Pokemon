<?php
class Test_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_info($username)
	{
		$query = $this->db->get('users_tbl');
		return $query->result_array();
	}
	
	//$query = $this->db->get_where('users_tbl',array('user_id' => $user_id));
	//return $query->row_array();
}

