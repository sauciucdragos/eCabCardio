<?php
 /**
  * 
  */
 class Home extends CI_Controller
 {
 	
 	function index()
 	{	
 		$this->load->view('header_beforelog');
 		$this->load->view('home');
 		$this->load->view('footer');
 	}
 }