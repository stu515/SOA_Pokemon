<?php
class database extends CI_Controller
{
	public function getAllUsers()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllUsers();

		if($database != null)
		{
			echo json_encode($database);
			//$this->load->view('database_view', $data); //print data to database view
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getUser($pls) //get one user
	{
		$this->load->model('database_model');
		$database = $this->database_model->getUser();

		
		if($database != null)
		{
			echo json_encode($database);
			
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getAllCreatures()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllCreatures();

		if($database != null)
		{
			echo json_encode($database);
			
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getCreature($creature_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->getCreature();
		

		if($database != null)
		{
			echo json_encode($database);
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getAllMoves()
	{
		$this->load->model('database_model');
		$database = $this->database_model->getAllMoves();
		
		if($database != null)
		{
			echo json_encode($database);
			
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getMove($move_name)
	{
		$this->load->model('database_model');
		$database = $this->database_model->getMove();

		
		if($database != null)
		{
			echo json_encode($database);
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getUserCreature($user_id, $creature_id) //singular
	{
		$this->load->model('database_model');
		$data = $this->database_model->getUserCreature($user_id, $creature_id);

		if($database != null)
		{
			echo json_encode($database);
			//$this->load->view('database_view', $data); //print data to database view
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getAllUserCreatures($username) //plural
	{
		$this->load->model('database_model');
		$database = $this->database_model->getUserCreature($username);

		if($database != null)
		{
			echo json_encode($database);
			//$this->load->view('database_view', $data); //print data to database view
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}

	public function getUserCreatureMove($user_id, $creature_name, $move_name) //plural
	{
		$this->load->model('database_model');
		$data = array($this->database_model->getUserCreatureMove($user_id,$creature_name, $move_name));

		
		if($database != null)
		{
			echo json_encode($database);
			//$this->load->view('database_view', $data); //print data to database view
		}
		else if($database == null)
		{
			echo "Not found in database";
		}
	}


}