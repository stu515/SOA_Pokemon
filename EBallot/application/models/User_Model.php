<?php
class User_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getUser($user_id = FALSE)
	{
		$query = $this->db->get('user');
		
		if ($user_id)
			$query = $this->db->get_where('user', array('User_Id' => $user_id));

		if($query->num_rows() < 1)
			return false;

		if($user_id)
			return $query->row_array();

		return $query->result_array();
	}

	public function hasVoted($user_id, $election_id)
	{
		$this->db->select('*');
		$this->db->from('vote');
		$this->db->where('User_Id', $user_id);
		$this->db->where('Election_Id', $election_id);

		$query = $this->db->get();
		
		if($query->num_rows() == 0)
			return false;

		return $query->row_array();
	}

	public function getCandidate($candidacy_id)
	{
		$query = $this->db->get_where('candidacy', array('Candidacy_Id' => $candidacy_id));

		return self::getUser($query->row_array()['User_Id']);
	}

	public function getVoted($user_id, $election_id)
	{
		$vote = self::hasVoted($user_id, $election_id);

		return self::getCandidate($vote['Candidacy_Id']);
	}

	public function insertVote($user_id, $candidacy_id, $election_id)
	{
		$this->db->insert('vote', array('Election_Id' => $election_id, 'User_Id' => $user_id, 'Candidacy_Id' => $candidacy_id));
		return true;
	}
}