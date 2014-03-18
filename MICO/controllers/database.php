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
		$this->load->view('test_view', $data);
	}

	public function getUser($pls) //get one user
	{
		$this->load->model('database_model');
		$database = $this->database_model->getUser();
		foreach($database as $row)
		{
			$data['username'] = $row['username']; //change to model (database) if single row is to be returned
		}
		$this->load->view('test_view', $data);
	}

	public function getAllCreatures()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllCreatures();
		foreach($database as $row)
		{
			$data['creature_name'] = $row['creature_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getCreature($creature_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->getCreature($creature_name);
		foreach($database as $row)
		{
			$data['creature_name'] = $row['creature_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getAllMoves()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllMoves();
		foreach($database as $row)
		{
			$data['move_name'] = $row['move_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getMove($move_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->getMove($move_name);
		foreach($database as $row)
		{
			$data['move_name'] = $row['move_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getUserCreature($username) //singular
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllUserCreatures($username);
		foreach($database as $row)
		{
			$data['$username'] = $row['$username']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getAllUserCreatures($username) //plural
	{
		$this->load->model('database_model');
		$database = $this->database_model->getUserCreature($username);
		foreach($database as $row)
		{
			$data['nickname'] = $row['nickname']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getUserCreatureMove($user_id, $creature_name, $move_name) //plural
	{
		$this->load->model('database_model');
		$database = $this->database_model->getUserCreatureMove($user_id,$creature_name, $move_name);
		foreach($database as $row)
		{
			$data['user_id'] = $row['user_id']; 
			//change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}


}