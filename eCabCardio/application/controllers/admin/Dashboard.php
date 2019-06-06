<?php 
/**
 * 
 */
class Dashboard extends CI_Controller
	{
		function __construct(){
		//sesion verification if sesion active redirect to dashboard
		parent::__construct();

		if(!$this->session->set_userdata('username'))
			//redirect('admin');

				echo 'mai ai delucrat la asta ';

	}
	
	function index()
	{
		$this->load->view('admin/dashboard');
	}
	
	
}