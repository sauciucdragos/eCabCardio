<?php
class User_model extends CI_model {
	//	public function __construct() {
	//	$this->load->database();
	//	}

	public function register($enc_password) {
		// User data array
	
		$data = array(
			'name_user_log' => $this->input->post('name_user_log'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'type_user' => $this->input->post('type_user'),
			'password' => $enc_password,
			//'password' => $this->input->post('password'),
			'from_date' => date("Y/m/d") 
		);
		//'password' => $enc_password,
		//Insert user
		return $this->db->insert('user',$data) ;

	}  //register

	//Log user in
	public function login($name_user_log, $password) {
		//Validate
		$this->db->where('name_user_log', $name_user_log) ;
		$this->db->where('password', $password) ;
		
		$result = $this->db->get('user');

		if($result->num_rows() == 1){
			return $result->row(0)->user_id;
		} else {
			return false;
		}

	}



	// Check username exists
	public function check_name_user_log_exists($name_user_log) {
		$query = $this->db->get_where('user', array('name_user_log'=>$name_user_log));
		if(empty($query->row_array())){
			return true;
		} else {
			return false;
		}

	} //check_username_exists

} //ci_model	