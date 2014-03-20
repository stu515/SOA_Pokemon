<?php
class database_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function getAllUsers()
	{
		$query = $this->db->get('users_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] = array(
					'user_id' => $rows->user_id,
					'user_name' => $rows->username,
					'password' => $rows->password,
					'handle' => $rows->handle,				
					'user_email' => $rows->email_address,
					'mobile_number' => $rows->mobile_number);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}

	public function getUser($pls)
	{
		$query = $this->db->get('users_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] = array(
					'user_id' => $rows->user_id,
					'user_name' => $rows->username,
					'password' => $rows->password,
					'handle' => $rows->handle,				
					'user_email' => $rows->email_address,
					'mobile_number' => $rows->mobile_number);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}

	public function getAllCreatures()
	{
		$query = $this->db->get('creatures_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] = array(
					'creature_id' => $rows->creature_id,
					'creature_name' => $rows->creature_name,
					'type' => $rows->type,
					'description' => $rows->description);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
		//return $query->result_array(); //return row_array() pag isa lang
	}

	public function getCreature($creature_id)
	{
		$query = $this->db->get('creatures_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] = array(
					'creature_id' => $rows->creature_id,
					'creature_name' => $rows->creature_name,
					'type' => $rows->type,
					'description' => $rows->description);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['creature_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}

	public function getAllMoves()
	{
		$query = $this->db->get('moves_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] =  array(
					'move_id' => $rows->move_id,
					'move_name' => $rows->move_name,
					'max_number' => $rows->max_number,
					'type' => $rows->type,				
			);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}

	public function getMove($move_id)
	{
		$query = $this->db->get('moves_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] =  array(
					'move_id' => $rows->move_id,
					'move_name' => $rows->move_name,
					'max_number' => $rows->max_number,
					'type' => $rows->type,				
			);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['move_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}

	public function getUserCreature($user_id,$creature_id)
	{
		$query = $this->db->get('users_creatures_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] =  array(
					'user_id' => $rows->user_id,
					'creature_id' => $rows->creature_id,
					'nickname' => $rows->nickname,		
			);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0) && $temp['creature_id'] == func_get_arg(1))
			{
				return $temp;
			}

		}
	}

	public function getAllUserCreatures($username)
	{
		$query = $this->db->get('users_creatures_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] =  array(
					'user_id' => $rows->user_id,
					'creature_id' => $rows->creature_id,
					'nickname' => $rows->nickname,		
			);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}

	public function getUserCreatureMove($user_id, $creature_id, $move_id)
	{
		$stringquery = 'SELECT * from users_creatures_moves_tbl';
		$query = $this->db->query($stringquery);
		$arrquery = $query->result_array();
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] =  array(
					'user_id' => $rows->user_id,
					'creature_id' => $rows->creature_id,
					'move_id' => $rows->move_id,
					'experience_points' => $rows->experience_points,		
			);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0) && $temp['creature_id'] == func_get_arg(1) && $temp['move_id'] == func_get_arg(2))
			{
				return $temp;
			}

		}
	}

	public function getLocation($location_id)
	{
		$query = $this->db->get('locations_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] =  array(
					'location_id' => $rows->location_id,
					'location_name' => $rows->location_name,
					'gps_coordinates' => $rows->gps_coordinates,		
			);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['location_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}

	public function getAllLocations()
	{
		$query = $this->db->get('locations_tbl');
		$newdata = array();
		$j = 0;
		foreach($query->result() as $rows)
		{
			$newdata[$j] =  array(
					'location_id' => $rows->location_id,
					'location_name' => $rows->location_name,
					'gps_coordinates' => $rows->gps_coordinates,		
			);
			$j++;
		}

		for($i=0; $i < sizeof($newdata); $i++)
		{
			$temp = $newdata[$i];
			if($temp == NULL)
			{
				break;
			}
			else if($temp['user_id'] == func_get_arg(0))
			{
				return $temp;
			}

		}
	}
}

