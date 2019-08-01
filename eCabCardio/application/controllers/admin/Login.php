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
		}

	function index()
		{
			$this->load->view('admin/login');
		}

	function verify()
		{
			//$this->load->library('form_validation');
			$this->form_validation->set_rules("username","Username",'required');
			$this->form_validation->set_rules("password","Password",'required');
			if($this->form_validation->run())
			{
				$username= $this->input->post('username');
				$password= $this->input->post('password');

				$this->load->model('ecabcardio');

				if($this->ecabcardio->validate($username,$password))
				{
				$session_data=array(
					'username' => $username,
					'password'=> $password

				);
				
				$this->session->set_userdata('username',$username);
				redirect('admin/dashboard');
				}
			
				else{
			
				$this->session->set_flashdata('error','Invalid Username and Password');
					redirect('admin/login');
				}
			}

			else
			{
				redirect('admin/login');
			}
		// $this->load->model('ecabcardio');
		// $userdata = $this->ecabcardio->validate();
		// $this->ecabcardio->validatee();
		// var_dump($userdata);
		// var_dump($query);
		// if(isset($userdata)) {
		// $data = array(
  //         'user'           => $userdata->name surename,
  //         'level_id'        => $userdata->type user,
  //       );
		// 	$this->session->set_userdata('user',$userdata);
		// 	redirect('admin/dashboard');
		// }
		// else
		// {
		// 	redirect('admin');
		// }
		}

	function logout()
	{
		$this->session->unset_userdata('username');
		redirect('admin/login');}

	}
	