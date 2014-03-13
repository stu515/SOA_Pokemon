<?php
class test extends CI_Controller 
{
	public function show($username)
	{
		$this->load->model('test_model');
		$test = $this->test_model->get_info($username);
		foreach($test as $row)
		{
			$data['username'] = $row['username']; //change to model (test) if single row is to be returned
		}
		$this->load->view('test_view', $data);
	}
}