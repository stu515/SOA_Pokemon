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

		foreach($query->result() as $rows)
		{
			$newdata = array(
					'user_id' => $rows->user_id,
					'user_name' => $rows->username,
					'password' => $rows->password,
					'handle' => $rows->handle,				
					'user_email' => $rows->email_address,
					'mobile_number' => $rows->mobile_number,
			);
		}

		return $newdata;
		//return $query->result_array(); //return row_array() pag isa lang
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

	public function getUserCreature($user_id,$creature_id)
	{
		$query = $this->db->get('users_creatures_tbl');
		return $query->result_array(); //return row_array() pag isa lang
	}

	public function getUserCreatureMove($user_id, $creature_name, $move_name)
	{
		//$this->db->select('u.user_id');
		//$this->db->from('users_tbl u', 'creatures_tbl c', 'moves_tbl m', 'users_creatures_moves_tbl ucm');
		//$this->db->where('u.user_id','ucm.user_id');


		//$this->db->select(user_id)
		//$this->db->from()


		/**$string="SELECT u.username, c.creature_name, m.move_name
		 FROM users_tbl AS u, creatures_tbl AS c, moves_tbl AS m, users_creatures_moves_tbl AS ucm
		 WHERE u.user_id = ucm.user_id
		 AND m.move_id = ucm.move_id
		 AND c.creature_id = ucm.creature_id;";*/
		//$this->db->where('moves_tbl.move_id','users_creatures_moves_tbl.move_id');
		//$this->db->where('creatures_tbl.creature_id','users_creatures_moves_tbl.creature_id');
		//$query=$this->db->get();
		//return $query->result_array(); //return row_array() pag isa lang

		//$query = $this->db->get('users_creatures_moves_tbl');
		//return $query->result_array(); //return row_array() pag isa lang

		//$query = $this->db->get('users_creatures_moves_tbl');
		$stringquery = 'SELECT * from users_creatures_moves_tbl';
		$query = $this->db->query($stringquery);
		//$query = $this->db->query('users_creatures_moves_tbl');
		$arrquery = $query->result_array();
		//$query->result_array(); //return row_array() pag isa lang

		//$results = $query;
		$i = 0;
		for($i; $i < sizeof($arrquery); $i++)
		{
			if ($arrquery[$i] == func_get_arg(0))
			{
				return json_encode($arrquery[$i]);
				break;
			}
		}
	}

	//$query = $this->db->get_where('users_tbl',array('user_id' => $user_id));
	//return $query->row_array();
}

