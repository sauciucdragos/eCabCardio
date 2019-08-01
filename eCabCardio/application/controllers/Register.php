<?php
 
 class Register extends CI_Controller
 {
 
 	public function index() 
 	{
 		$this->load->view('register');
 	}

 	public function form_validation()
	{
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|min_length[6]|max_length[30]|is_unique[user.username]'
		);
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last Name','required');
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|min_length[6]|max_length[30]|trim'
		);
		$this->form_validation->set_rules(
			'passconf',
			'Confirm Password',
			'required|trim|matches[password]'
		);
		$this->form_validation->set_rules('from_date','Start date','required');
		$this->form_validation->set_rules('usertype','User type');

		if ($this->form_validation->run()) {
		 	$this->load->model('register_model');
			$data=array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'usertype' => $this->input->post('usertype'),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'from_date' => $this->input->post('from_date')
				);
			$this->register_model->insert($data);
			redirect('login');
		} else {
			$this->index();
		}
	}
}
 