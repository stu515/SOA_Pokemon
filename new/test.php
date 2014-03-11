<?php
class Test extends CI_Controller {



	public function show($username)
	{
		$this->load->model('test_model');
		$test = $this->test_model->get_info($username);
		$data['username'] = $test['username'];
		$this->load->view('test_view', $data);
	}
}