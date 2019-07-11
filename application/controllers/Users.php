<?php
class Users extends CI_Controller {
	public function register() 
	{
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name_user_log','Name user log','required|callback_check_name_user_log_exists');
			$this->form_validation->set_rules('first_name','First Name','required');
			$this->form_validation->set_rules('last_name','Last Name','required');
			$this->form_validation->set_rules('type_user','Type_user','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('rpassword','Confirm password','matches[password]');
			

	if($this->form_validation->run() === FALSE) {
		$this->load->view('templates/header', $data);
        $this->load->view('users/register', $data);
       	$this->load->view('templates/footer', $data);
      	} else {
       		//die('sddsdsdsd'); 
       	// Encrypt password
       	$enc_password = md5($this->input->post('password'));
       	$this->user_model->register($enc_password);

       		
       		// Set message
       		$this->session->set_flashdata('user_registered','You are now registered and can log in');
       		
       		redirect('home');
      	}	
	} // register

// function login
public function login() 
	{
			$data['title'] = 'Login';



			$this->form_validation->set_rules('name_user_log','Name user log','required');
			$this->form_validation->set_rules('password','Password','required');
			
	if($this->form_validation->run() === FALSE) {
		$this->load->view('templates/header', $data);
        $this->load->view('users/login', $data);
       	$this->load->view('templates/footer', $data);
      	} else { 
      		// Get username
      		$name_user_log = $this->input->post('name_user_log');
      		// Get and encrypt password
       		$password = md5($this->input->post('password'));

       		// Login user
       		$user_id = $this->user_model->login($name_user_log, $password);
    		
    		if($user_id){
    			// Create session

  //if(!$this->session->userdata('logged_in')){

    			$user_data = array(
    				'user_id' => $user_id,
    				'name_user_log' => $name_user_log,
    				'logged_in' => true
    			);

    			$this->session->set_userdata($user_data);

          //test new value session
                        //$c='new value';
                       // $this->session->set_userdata('some_name', $c);
                       // $bb1  = $this->session->userdata('name_user_log');
                        //$bb2 = $this->session->userdata('some_name');
                        //die('==='.$bb1.'***'.$bb2.'###');

  			
    			// Set message
       			$this->session->set_flashdata('user_login','You are now logged in');

       			redirect('home');
       			
    		} else {


    			// Set message
       			$this->session->set_flashdata('login_failed','Login is invalid');

       			redirect('users/login');
    		}

      	}	
	} // login

	// Log user out
	public function logout(){
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('name_user_log');
		$this->session->unset_userdata('user_id');
			// Set message
       		$this->session->set_flashdata('user_loggedout','You are now logged out');
       		
       	redirect('users/login');

	}  // logout

	// Check if name_user_log exists
	public function check_name_user_log_exists($name_user_log){
		$this->form_validation->set_message('check_name_user_log_exists','That username is taken. Please choose a different one');
		if($this->user_model->check_name_user_log_exists($name_user_log)) {
			return true;
		} else {
			return false;
		}
	}  // check_name_user_log_exists

}  //ci_controler