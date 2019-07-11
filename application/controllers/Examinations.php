<?php
class Examinations extends CI_Controller {

	// or
			//function __construct() {
			//	parent::__construct();
			//	if(!$this->session->userdata('logged_in')){
			//	redirect('users/login');				}
			//}

		

	public function create_dic_examination() {
	//	global $price_temp ;
	//	$price_temp = 0;
		
		//Check loggin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login') ;
			}

        $save_search=$this->input->post('save_search');
        	

		if($save_search == '' or $save_search == 'save') {  //salvare date
			 
			$this->form_validation->set_rules('examination_type','Examination _Type','required');
			$this->form_validation->set_rules('price','Price','required');
			$this->form_validation->set_rules('from_date','From Date','required');
			
			 $data['title'] = 'Entry dic_examination value'; 

	if($this->form_validation->run() === FALSE) {
		
			$this->load->view('templates/header', $data);
        	$this->load->view('posts/examination/create_dic_examination', $data);
       		$this->load->view('templates/footer', $data);
       	} else {
       		
       		$this->post_model->create_dic_examination_posts();
		// Set message
       		$this->session->set_flashdata('dic_examinationt_created','Your dic_examination was created');
       			
       		//$this->load->view('posts/success_search');
       		redirect('Examinations/create_dic_examination');
       	}

       } else {  //if($save_search='save')  --> adica search

     // testez daca sa introdus un criteriu ; daca da se face cautare dupa criteriu
       // daca nu se cauta in toata baza
       		//if (!$this->input->post('price') and !$this->input->post('examination_type') or 1==1) {
       			//$this->session->set_flashdata('search_all','Not criteria - Are retrive all posts ');
       			

       			$price_temp = $this->input->post('price');
       			
       		//	$this->session->set_userdata($price_temp);
       		
				$this->search_dic_examination();
       		} 


      
		
	} // create_dic_examination

	public function search_dic_examination($offset=0) {
		//Check loggin
	//	print_r($price_temp) ;
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$this->load->library('pagination');
      		
      		$config['base_url'] = site_url('posts/search_dic_examination');
      		$config['total_rows'] = $this->post_model->countAll_dic_examination();
			$config['per_page'] = 8;
			$config['reuse_query_string'] = TRUE;

			$this->pagination->initialize($config);


			$data['title'] = 'Search dic_examination';

			$data['keyword'] ='Examination_type=' . 
       			$this->input->post('examination_type') . " ; Price=" . $this->input->post('price') ;
			//$data['title'] = 'Retrive  dic_examination value'; 

			$this->load->model('post_model');
			$data['dic_examination'] = $this->post_model->search_dic_examination_posts($config['per_page'], $offset);

			$this->load->view('templates/header', $data);
       		$this->load->view('posts/examination/search_dic_examination', $data);
       		//$this->load->view('templates/footer', $data);
	} // search_dic_examination


	public function edit_dic_examination($dic_examination_id) {
			$data['title'] = 'Edit dic_examination value'; 

			$data['dic_examination'] = $this->post_model->getById_dic_examination($dic_examination_id);
			$this->load->view('templates/header', $data);
        	$this->load->view('posts/examination/edit_dic_examination', $data);

	} //edit_dic_examination


	public function update_dic_examination($dic_examination_id) {

			$this->post_model->update_dic_examination($dic_examination_id);
		// Set message
       		$this->session->set_flashdata('dic_examination_updated','Your dic_examination was updated');


       		redirect('Examinations/search_dic_examination');
	} //


	public function delete_dic_examination($dic_examination_id){
			$this->post_model->delete_dic_examination($dic_examination_id);

			$this->session->set_flashdata('dic_examination_deleted','Your dic_examination was deleted');
       		redirect('Examinations/search_dic_examination');
	}



} // CI_controler
