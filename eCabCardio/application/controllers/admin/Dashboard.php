<?php 
/**
 * 
 */
class Dashboard extends CI_Controller
	{
		function __construct(){
		//sesion verification if sesion active redirect to dashboard
		parent::__construct();
	
	if(!$this->session->userdata('username')){
		 	redirect('admin');	
		 }}
	
	function index()
	{
		$this->load->view('admin/dashboard');
	}
	
	}

