<?php
class database extends CI_Controller
{
	public function getAllUsers()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllUsers();
		foreach($database as $row)
		{
			$data['username'] = $row['username'];
			$data['user_id'] = $row['user_id']; //change to model (database) if single row is to be returned
		}
		if($data != null)
		{
			$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getUser($pls) //get one user
	{
		$this->load->model('database_model');
		$database = $this->database_model->getUser();
		//foreach($database as $row)
		//{
			//$data['user_id'] = $row['user_id']; //change to model (database) if single row is to be returned
		//}
		if($database != null)
		{
			echo json_encode($database);
			//$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getAllCreatures()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllCreatures();
		foreach($database as $row)
		{
			$data['creature_name'] = $row['creature_name']; //change to model (database) if single row is to be returned
		}
		if($data != null)
		{
			$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getCreature($creature_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->getCreature($creature_name);
		foreach($database as $row)
		{
			$data['creature_name'] = $row['creature_name']; //change to model (database) if single row is to be returned
		}
		if($data != null)
		{
			$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getAllMoves()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllMoves();
		foreach($database as $row)
		{
			$data['move_name'] = $row['move_name']; //change to model (database) if single row is to be returned
		}
		if($data != null)
		{
			$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getMove($move_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->getMove($move_name);
		foreach($database as $row)
		{
			$data['move_name'] = $row['move_name']; //change to model (database) if single row is to be returned
		}
		if($data != null)
		{
			$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getUserCreature($user_id,$creature_id) //singular
	{
		$this->load->model('database_model');
		$data = $this->database_model->getUserCreature($user_id,$creature_id);
		foreach($data as $row)
		{
			$data['user_id'] = $row['user_id']; //change to model (database) if single row is to be returned
			//echo $row['user_id'];
			
		}
		if($data != null)
		{
			//$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getAllUserCreatures($username) //plural
	{
		$this->load->model('database_model');
		$database = $this->database_model->getUserCreature($username);
		foreach($database as $row)
		{
			$data['nickname'] = $row['nickname']; //change to model (database) if single row is to be returned
		}
		if($data != null)
		{
			$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}

	public function getUserCreatureMove($user_id, $creature_name, $move_name) //plural
	{
		$this->load->model('database_model');
		$data = array($this->database_model->getUserCreatureMove($user_id,$creature_name, $move_name));
		foreach($data as $row)
		{
			$data['user_id'] = $row['user_id'];
			//echo $row['creature_id'];
			//echo "\n";
			//echo $row['user_id'];
			
			//change to model (database) if single row is to be returned
		}
		
		if($data != null)
		{
			$this->load->view('database_view', $data); //print data to database view
		}
		else if($data == null)
		{
			echo "Not found in database";
		}
	}


}