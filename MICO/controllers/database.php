<?php
class database extends CI_Controller
{
	public function getAllUsers()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllUsers();
		foreach($database as $row)
		{
			$data['username'] = $row['username']; //change to model (database) if single row is to be returned
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
		$database = $this->database_model->get_info();
		foreach($database as $row)
		{
			$data['creature_name'] = $row['creature_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getCreature($creature_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->get_info($creature_name);
		foreach($database as $row)
		{
			$data['creature_name'] = $row['creature_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getAllMoves()
	{
		$this->load->model('database_model');
		$database = $this->database_model->get_info();
		foreach($database as $row)
		{
			$data['move_name'] = $row['move_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getMove($move_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->get_info($move_name);
		foreach($database as $row)
		{
			$data['move_name'] = $row['move_name']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getUserCreature($username) //singular
	{
		$this->load->model('database_model');
		$database = $this->database_model->get_info($username);
		foreach($database as $row)
		{
			$data['$username'] = $row['$username']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}

	public function getAllUserCreature($username) //plural
	{
		$this->load->model('database_model');
		$database = $this->database_model->get_info($username);
		foreach($database as $row)
		{
			$data['$username'] = $row['$username']; //change to model (database) if single row is to be returned
		}
		$this->load->view('database_view', $data);
	}
}