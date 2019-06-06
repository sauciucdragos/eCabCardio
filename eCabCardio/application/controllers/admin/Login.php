<?php 
/**
 * 
 */
class Login extends CI_Controller
	{
		//sesion verification if sesion active redirect to dashboard
	function __construct()
	{
		parent::__construct();

		if( $this->session->set_userdata('username'))
			redirect('admin/dashboard');
	}

	function index()
	{
		$this->load->view('admin/login');
	}
	function verify()
	{
		$this->load->model('ecabcardio');

		$check = $this->ecabcardio->validate();

		if($check) {

			$this->session->set_userdata('username','1');
			redirect('admin/dashboard');
		}
		else
		{
			redirect('admin');
		}
	}
	function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy('username');
		redirect('admin/login');}

}
	