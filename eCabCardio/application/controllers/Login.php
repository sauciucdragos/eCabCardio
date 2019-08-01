<?php
class Login extends CI_Controller{

  function __construct()
    {
    parent::__construct();
    $this->load->model('login_model');
    }
 
  public function index()
    {
    $this->load->view('login_view');
    }
 
  public function auth()
    {
    $username = $this->input->post('username',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($username,$password);

        if($validate->num_rows() > 0){

          $data  = $validate->row_array();
          $username  = $data['username'];
          $first_name = $data['first_name'];
          $last_name = $data['last_name'];
          $usertype = $data['usertype'];

          $sesdata = array(
              'username'  => $username,
              'first_name'     => $first_name,
              'last_name'     => $last_name,
              'usertype'     => $usertype,
              'logged_in' => TRUE
                          );
        $this->session->set_userdata($sesdata);

        // access login for admin
        if($usertype === '1'){
          redirect('page');
 
        // access login for clients
        }elseif($usertype === '2'){
          redirect('page/medics');
 
        // access login for admins
        }else{
          redirect('page/admins');
        }

        }else{
          echo $this->session->set_flashdata('msg','Username or Password is Wrong');
          redirect('login');
    }
  }
 
  public function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
}