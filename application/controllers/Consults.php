<?php
class Consults extends CI_Controller {

	// or
			//function __construct() {
			//	parent::__construct();
			//	if(!$this->session->userdata('logged_in')){
			//	redirect('users/login');				}
			//}

	    	public function consult_patient($patient_id) {

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			//	$aa='consult';
			//die($pacient_id);
			$data['title'] = 'Consult patient';
			$data['patient'] = $this->post_model->getById_patient($patient_id);
			$data['consult'] = $this->post_model->getById_consult_patient_id($patient_id);
			$data['examination'] = $this->post_model->getExamination();
			$data['analysis'] = $this->post_model->getAnalysis();

			//$this->form_validation->set_rules('consult_reason','Consult reason','required');
			//$this->form_validation->set_rules('notices','Notices','required');
			//$this->form_validation->set_rules('diagnostics','Diagnostics','required');
			//$this->form_validation->set_rules('reference','Reference','required');
			$this->form_validation->set_rules('treatment','Treatment','required');

			if($this->form_validation->run() === FALSE) {

			$this->load->view('templates/header', $data);
       		$this->load->view('posts/consult/consult_patient', $data);
	       	} else {	
	       		$btn_save=$this->input->post('save');
	       		$btn_medical_letter=$this->input->post('medical_letter');

	       		//salvez datele in tabela consult, returnez consult_id;
	       		$consult_id = $this->post_model->consult_saved($patient_id); 
	        
	       		$this->session->set_flashdata('consult_saved','Your consult was saved');

	       		if($btn_save) {
	       		redirect('home');	
	       	} else{
	       		
	       		//die('**jjhjh**'.$consult_id.'======');
	       		$this->medical_letter($consult_id)	;
	       	}


	       		
	       		//redirect(site_url('consults/consult_patient/'.$patient_id));
	          		} //else
} //consult_patient

	       		public function medical_letter($consult_id) {

	       			//die('medical letter'.$consult_id.'  mmm')  ;

	       	$data['title'] = 'Medical letter';

	       	$cabinetObjArr = $this->post_model->getCabinet();

			$cabinetObj = array_shift($cabinetObjArr);

			$data['cabinet'] = $cabinetObj->cab_name;
	       	$data['consult'] = $this->post_model->getById_consult_consult_id($consult_id);

	       	//$aa=$data['cabinet']['city'];

	       		$this->form_validation->set_rules('last_name','Last_name','required');
	       		

	       	
			//$data['patient'] = $this->post_model->getById_patient($patient_id);
			
			//$data['examination'] = $this->post_model->getExamination();
			//$data['analysis'] = $this->post_model->getAnalysis();

			
			// if($this->form_validation->run() === FALSE) {

			$this->load->view('templates/header', $data);
       		$this->load->view('posts/consult/medical_letter', $data);
	       	// }  else {



       		// die('print') ;
	       	// 	//salvez datele 
	       	// 	$this->post_model->medical_letter_saved(); 
	        
	       	// 	$this->session->set_flashdata('medical_letter_saved','Your medical_letter was saved');
	       	// }  //form validation

















} //  medical_letter

		



}  //Consults