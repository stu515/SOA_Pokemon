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

	public function getCreature()
	{
		$query = $this->db->get('creatures_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getAllMoves()
	{
		$query = $this->db->get('moves_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getMove()
	{
		$query = $this->db->get('moves_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getAllUserCreatures($username)
	{
		$query = $this->db->get('users_creatures_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getUserCreature($username)
	{
		$query = $this->db->get('users_creatures_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getUserCreatureMove($user_id, $creature_name, $move_name)
	{
		//$query = $this->db->get('users_creatures_moves_tbl');
		$this->db->select('u.user_id');
		$this->db->from('users_tbl u', 'creatures_tbl c', 'moves_tbl m', 'users_creatures_moves_tbl ucm');
		//$this->db->where('u.user_id','ucm.user_id');
		/**$string="SELECT u.username, c.creature_name, m.move_name
				FROM users_tbl AS u, creatures_tbl AS c, moves_tbl AS m, users_creatures_moves_tbl AS ucm
				WHERE u.user_id = ucm.user_id
				AND m.move_id = ucm.move_id
				AND c.creature_id = ucm.creature_id;";*/
		//$this->db->where('moves_tbl.move_id','users_creatures_moves_tbl.move_id');
		//$this->db->where('creatures_tbl.creature_id','users_creatures_moves_tbl.creature_id');
		$query=$this->db->get();
		return $query->result_array(); //return row_array() pag isa lang
	}

	//$query = $this->db->get_where('users_tbl',array('user_id' => $user_id));
	//return $query->row_array();
}

