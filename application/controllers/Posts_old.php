<?php
class Posts extends CI_Controller {

	// or
			//function __construct() {
			//	parent::__construct();
			//	if(!$this->session->userdata('logged_in')){
			//	redirect('users/login');				}
			//}




       public function index()
		{
        $data['title'] = 'Latest Post'; // Capitalize the first letter
        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer', $data);
		}

		public function view($city=NULL)
		{
			$data['post'] = $this->post_model->get_posts($city);
			
			if(empty($data['post']))
			{
				show_404();
			}
			$data['title'] = $data['post']['county2'];
			$this->load->view('templates/header', $data);
        	$this->load->view('posts/view', $data);
       		$this->load->view('templates/footer', $data);
		}

		public function consult() {
			$aa='consult';
			die($aa);
		}

		
		public function search_patient() {
			//Check loggin
			global $select_criteriu;
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}


			$select_criteriu=$this->input->post('select_criteriu');
	
			$data['title'] = 'Search patient';
			

			if ($select_criteriu == 'cnp') {
				$this->form_validation->set_rules('cnp','Cnp','required');
			} elseif ($select_criteriu == 'name') {
				$this->form_validation->set_rules('first_name','First Name','required');
				$this->form_validation->set_rules('last_name','Last Name','required');
				}
				elseif ($select_criteriu == 'cnp_name_nr') {
					//$this->form_validation->set_rules('first_name','First Name','notrequired');
				  //  $this->form_validation->set_rules('last_name','Last Name','notrequired');
					//die('eroare posts/search_patient 1');
					
				}

	if(($this->form_validation->run() === FALSE ) and ($select_criteriu != 'cnp_name_nr')) {

			$this->load->view('templates/header', $data);
        	$this->load->view('posts/patient/search_patient', $data);
       		//$this->load->view('templates/footer', $data);
       	} else { 
			
       		$select_criteriu=$this->input->post('select_criteriu');
       		//add $select_criteriu to session
             $this->session->set_userdata('select_criteriu', $select_criteriu);
                       // $bb1  = $this->session->userdata('name_user_log');
                        //$bb2 = $this->session->userdata('some_name');
                        //die('==='.$bb1.'***'.$bb2.'###');



			$this->search_patient_result()	;	
       		
       	}
   	} // create_patient

   		public function search_patient_result($offset=0) {
			//global $select_criteriu;
			//$select_criteriu=$this->input->post('select_criteriu');
			
   			$select_criteriu = $this->session->userdata('select_criteriu');

   			//print_r('aaa :'. $select_criteriu);

       		$this->load->library('pagination');
      		
      		$config['base_url'] = site_url('posts/search_patient_result');
      		$config['total_rows'] = $this->post_model->countAll_patient($select_criteriu);
      		
			$config['per_page'] = 6;
			$config['reuse_query_string'] = TRUE;

			$this->pagination->initialize($config);
			
  		//die('aaa--' . $config['total_rows'] );
       		
       		$data['patient'] = $this->post_model->search_patient($config['per_page'], $offset);

			$this->load->view('templates/header', $data);
       		$this->load->view('posts/patient/search_patient_result', $data);

}

        public function validate_cnp($cnp) { //cnp
        	//verific cnp si extrag data nasterii
        	
    		$sircnp = strval($cnp);
     		$birth_date = substr($sircnp,1,6);
     		$ccc = substr($sircnp,0,1);
  
    		if($ccc == '1' or $ccc == '2')  {
    		$birth_date='19'.$birth_date;
    		return TRUE;
    	}
    	elseif  ($ccc == '5' or $ccc == '6') {
    		 $birth_date = '20'.$birth_date;
    		 return TRUE;
    		} else {
    		return FALSE;	
    		}
          	
        } //cnp


        public function edit_patient($patient_id) {
			$data['title'] = 'Edit patient value'; 

			$data['patient'] = $this->post_model->getById_patient($patient_id);
			$this->load->view('templates/header', $data);
        	$this->load->view('posts/patient/edit_patient', $data);

	} //edit_dic_examination


	public function update_patient($patient_id) {
			$save=$this->input->post('save');
			$consult=$this->input->post('consult');
			$cancel=$this->input->post('cancel');

			if ($save or $consult) {
			$this->post_model->update_patient($patient_id);
		  // Set message
       		$this->session->set_flashdata('patient_updated','Your patient was updated');
       			}
       		if ($save) {
       			redirect('Posts/search_patient');
       		}
	       		elseif ($consult) {
	       			$this->consult();
	       		}
		       		elseif ($cancel) {
		       			$this->load->view('templates/header', $data);
       					$this->load->view('posts/patient/search_patient_result', $data);
		       		}
		       
       		
       		//redirect('home');
	} // update_patient






		public function create_patient() {
			//Check loggin
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
		
			$data['title'] = 'Create patient';
			$data['countys'] = $this->post_model->get_countys();

			$this->form_validation->set_rules('first_name','First Name','required');
			$this->form_validation->set_rules('last_name','Last Name','required');
			$this->form_validation->set_rules('cnp','CNP','required|callback_validate_cnp');
			$this->form_validation->set_rules('county','County','required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('adress','Adress','required');
			$this->form_validation->set_rules('profession','Profession','required');
			$this->form_validation->set_rules('workplace','Workplace','required');
			$this->form_validation->set_rules('phone','Phone','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('marital_status','Marital Status','required');

			$this->form_validation->set_message('validate_cnp','Inccorect CNP!');
			


	if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
        	$this->load->view('posts/patient/create_patient', $data);
       		//$this->load->view('templates/footer', $data);
       	} else {
       

       		$this->post_model->create_patient_posts();
       		//$this->load->view('posts/success');
       		// Set message
       		$this->session->set_flashdata('patient_created','Your patient was created');
       		
       		redirect('home');
       	}
   	} // create_patient



	public function get_city(){
		$county2=$this->input->post('county2');
		
		$citys=$this->post_model->get_city($county2);
		
		if(count($citys)>0)
		{
			$city_select_box = '';
				
			
			$city_select_box .= '<option>Select City</option>';
			foreach($citys as $city) {
				
				$city_select_box .= '<option>'.$city->city.'</option>'; 
			}
			
			echo json_encode($city_select_box) ;
		}

	} //get_city


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
       		redirect('Posts/create_dic_examination');
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
			$config['per_page'] = 3;
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


       		redirect('Posts/search_dic_examination');
	} //


	public function delete_dic_examination($dic_examination_id){
			$this->post_model->delete_dic_examination($dic_examination_id);

			$this->session->set_flashdata('dic_examination_deleted','Your dic_examination was deleted');
       		redirect('Posts/search_dic_examination');
	}



			//$data['title'] = 'Search dic_examination value'; 
		//	$this->load->view('templates/header', $data);
        //	$this->load->view('posts/search_dic_examination', $data);
       	//	$this->load->view('templates/footer', $data);
       	
			
       	//	$data['posts'] = $this->post_model->search_dic_examination_posts();

			//print_r($data);

			//if(empty($data['post']))

		//	if(empty($data['price']))
		//	{
				//show_404();
			//	$this->load->view('posts/success');
		//	}
			//$data['title'] = $data['post']['examination_type'];
		//	$data['title'] = 'Afisare date rezultate in urma cautarii';

		//	$this->load->view('templates/header', $data);
       		//$this->load->view('posts/success_search');
       		//$this->load->view('templates/footer', $data);
       		//redirect('Posts/create_dic_examination');
       	
		
	public function aaa() {
	echo "Hello world!";
	//die('aaa');
                        }

} // CI_controler
