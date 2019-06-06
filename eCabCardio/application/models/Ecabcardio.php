<?php

/**
 * 
 */
class Ecabcardio extends CI_Model
{
	
	function validate()
	{

		$arr['username'] = $this->input->post('username');
		$arr['password'] = $this->input->post('password');

				//for md5 encrition
				//md5($this->input->post('username'));

		// if library is not autoloaded
		//$this->load->library('database');

		return $this->db->get('utilizatori',$arr)->row(); 	// result(); multiple entries
															//row(); fetching single entries
		
	}
	
}