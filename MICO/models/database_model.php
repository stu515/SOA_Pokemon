<?php
class database_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function getAllUsers()
	{
		$query = $this->db->get('users_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getUser()
	{
		$query = $this->db->get('users_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getAllCreatures()
	{
		$query = $this->db->get('creatures_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getAllMoves()
	{
		$query = $this->db->get('moves_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getAllUserCreatures($username)
	{
		$query = $this->db->get('user_creatures_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	//$query = $this->db->get_where('users_tbl',array('user_id' => $user_id));
	//return $query->row_array();
}

