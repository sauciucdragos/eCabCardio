<?php

class Page extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      if($this->session->userdata('logged_in') !== TRUE)
          {
          redirect('login');
          }
  }
 
  public function index()
    { //Allowing access to Nurses only
      if($this->session->userdata('usertype')==='1')
      {
          $this->load->view('header');
          $this->load->view('home');
          $this->load->view('footer');

      }else{
          redirect('login');
            }
    }
 
  public function medics()
    { //Allowing access to Medics only
      if($this->session->userdata('usertype')==='2')
    {
          $this->load->view('header');
          $this->load->view('home');
          $this->load->view('footer');

      }else{
          redirect('login');
           }
    }
    
  public function admins()
    { //Allowing access to Administrators only
      if($this->session->userdata('usertype')==='3')
      {
          $this->load->view('header');
          $this->load->view('home');
          $this->load->view('footer');

      }else{
          redirect('login');
           }
    }

  public function tos()
      {
          $this->load->view('header');
          $this->load->view('tos');
      }
      
  public function privacy()
      {
          $this->load->view('header');
          $this->load->view('privacy');
      }
}

