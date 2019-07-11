<?php
class Post_model extends CI_model {  //cimodel

		

	public function getById_consult($patient_id){

	return $this->db->get_where('patient',array('patient_id'=> $patient_id))->row();

	}  //getById_patient

} //CI_model