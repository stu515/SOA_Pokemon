<?php
class Election_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getElection($election_id = FALSE)
	{
		$query = $this->db->get('election');
		
		if ($election_id)
			$query = $this->db->get_where('election', array('Election_Id' => $election_id));
		
		if($query->num_rows() < 1)
			return false;

		if($election_id)
			return $query->row_array();
		
		return $query->result_array();
	}

	public function getOpenElections()
	{
		$query = $this->db->get_where('election', array('Is_Open' => true));
		
		return $query->result_array();
	}

	public function getCandidates($election_id)
	{
		$this->db->select('Candidacy_Id, user.User_Id, Platform, Last_Name, First_Name, Middle_Name');
		$this->db->from('user');
		$this->db->join('candidacy', 'candidacy.User_Id = user.User_Id');
		$this->db->where('Election_Id', $election_id );
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getNotCandidates($election_id)
	{
		$queryString = "SELECT *
						FROM user
						WHERE User_Id NOT IN
						(	SELECT candidacy.User_Id 
							FROM candidacy, user
							WHERE candidacy.Election_Id = ".$election_id."
							AND candidacy.User_Id = user.User_Id)";
		
		$query = $this->db->query($queryString);

		return $query->result_array();
	}

	public function createElection($election_name)
	{
		$this->db->insert('election', array('Election_Name' => $election_name, 'Is_Open' => false));
		return true;
	}

	public function openElection($election_id)
	{
		$this->db->where('Election_Id', $election_id);
		$this->db->update('election', array('Is_Open' =>true));
		return true;
	}

	public function getResults($election_id)
	{
		$queryString = "SELECT Candidacy_Id, COUNT(*) as Count 
						FROM vote
						WHERE Election_Id = ".$election_id."
						GROUP BY Candidacy_Id
						ORDER BY Count DESC";

		$query = $this->db->query($queryString);

		return $query->result_array();
	}

	public function getResultsForCandidate($candidacy_id)
	{
		$queryString = "SELECT COUNT(*) as Count 
						FROM vote
						WHERE Candidacy_Id = ".$candidacy_id;

		$query = $this->db->query($queryString);

		return $query->row_array();
	}

	public function addCandidate($election_id, $user_id, $platform = "")
	{
		$this->db->insert('candidacy', array('Election_Id' => $election_id, 'User_Id' => $user_id, 'Platform' => $platform));
		return true;
	}

	public function removeCandidate($election_id, $user_id)
	{
		$this->db->delete('candidacy', array('Election_Id' => $election_id, 'User_Id' => $user_id));
		return true;
	}
}