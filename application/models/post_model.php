<?php
class Post_model extends CI_model {
	public function __construct() {
		$this->load->database();
	} 

	public function create_patient_posts() {
		//print_r($this->input->post('first_name');
		//$data['title'] = 'Dates patient aaa'; 
		$dic_city_id='1';
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'cnp' => $this->input->post('cnp'),
			'birth_date' => $this->input->post('birth_date'),
			'dic_city_id' => $dic_city_id,
			'adress' => $this->input->post('adress'),
			'profession' => $this->input->post('profession'),
			'workplace' => $this->input->post('workplace'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'marital_status' => $this->input->post('marital_status')
		);
		return $this->db->insert('patient',$data) ;
	}

				public function search_patient($limit, $offset){  //search_patient_result(
				//$keyword = $this->input->post('keyword');
	
	             	$select_criteriu = $this->session->userdata('select_criteriu');
	             	$cnp = $this->session->userdata('cnp');
					$first_name = $this->session->userdata('first_name');
					$last_name = $this->session->userdata('last_name');
					$patient_number = $this->session->userdata('patient_number');


				$this->db->limit($limit);
				$this->db->offset($offset);

				//$select_criteriu = $this->input->post('select_criteriu');
				//print_r($select_criteriu. '--select criteriu');
				if ($select_criteriu == 'cnp') {
					$this->db->where(array('cnp' =>  $cnp));
					}
					elseif ($select_criteriu == 'name') {
							$this->db->where(array('first_name' =>  $first_name));
							$this->db->where(array('last_name' =>   $last_name));
						}
						elseif ($select_criteriu == 'cnp_name_nr'){
							$this->db->like(array('cnp' =>  $cnp));
							$this->db->like(array('first_name' =>  $first_name));
							$this->db->like(array('last_name' =>  $last_name));
							$this->db->like(array('patient_number' =>  $patient_number));
							}
							else
								{

									die('eroare selectie cautare pacient 1111');
							}
				
				$this->db->order_by('patient_id DESC');
				return $this->db->get('patient')->result();

    }  //search_patient_result(





			public function getById_patient($patient_id){
				$query=$this->db->get_where('patient',array('patient_id'=>$patient_id))->row();
			return $query;

	}  //getById_patient






		public function update_patient($patient_id) {
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'cnp' => $this->input->post('cnp'),
			'birth_date' => $this->input->post('birth_date'),
			'dic_city_id' => $this->input->post('dic_city_id'),
			'adress' => $this->input->post('adress'),
			'profession' => $this->input->post('profession'),
			'workplace' => $this->input->post('workplace'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'marital_status' => $this->input->post('marital_status')
		);
			$this->db->where(array('patient_id'=>$patient_id));
			$this->db->update('patient',$data) ;
	} // update_patient






			public function countAll_patient($select_criteriu){

				$cnp = $this->session->userdata('cnp');
				$first_name = $this->session->userdata('first_name');
				$last_name = $this->session->userdata('last_name');
				$patient_number = $this->session->userdata('patient_number');

				if ($select_criteriu == 'cnp') {
					$this->db->where(array('cnp' => $cnp));
				
					}
					elseif ($select_criteriu == 'name') {
						print_r($first_name);
						print_r($last_name);
							$this->db->where(array('first_name' =>  $first_name));
							$this->db->where(array('last_name' =>  $last_name));
						}
						elseif ($select_criteriu == 'cnp_name_nr'){
							$this->db->like(array('cnp' => $cnp));
							$this->db->like(array('first_name' =>  $first_name));
							$this->db->like(array('last_name' =>  $last_name));
							$this->db->like(array('patient_number' =>  $patient_number));
							}
							else
								{
									//die('1'. $select_criteriu);
									//die('eroare selectie cautare pacient- countAll_patient');
							}
								
				return $this->db->get('patient')->num_rows();


}  //countAll_patient
// ====================================dic_examination========================================

	public function create_dic_examination_posts() {
			$data = array(
			'examination_type' => $this->input->post('examination_type'),
			'price' => $this->input->post('price'),
			'from_date' => $this->input->post('from_date'),
			'to_date' => $this->input->post('to_date')
			);

	return $this->db->insert('dic_examination',$data) ;
	} // create_dic_examination_posts


		public function search_dic_examination_posts($limit, $offset) {  //get All
				//$keyword = $this->input->post('keyword');
				$this->db->limit($limit);
				$this->db->offset($offset);
				
				$this->db->order_by('dic_examination_id DESC');
				$price= $this->input->post('price');

			//if ($price_temp) {
				//	$price = $price_temp ;
			//	}
			
				$this->db->like(array('examination_type' => $this->input->post('examination_type')));
				$this->db->like(array('price' =>  $price));
				$this->db->like(array('from_date' =>  $this->input->post('from_date')));
				//$this->db->like(array('to_date' =>  $this->input->post('to_date')));

				return $this->db->get('dic_examination')->result();
	}
	
		public function countAll_dic_examination(){
				$this->db->like(array('examination_type' => $this->input->post('examination_type')));
				$this->db->like(array('price' =>  $this->input->post('price')));
				$this->db->like(array('from_date' =>  $this->input->post('from_date')));
			//	$this->db->like(array('to_date' =>  $this->input->post('to_date')));

				return $this->db->get('dic_examination')->num_rows();
		}


		public function getById_dic_examination($dic_examination_id){
			return $this->db->get_where('dic_examination',array('dic_examination_id'=>$dic_examination_id))->row();
	}

		public function update_dic_examination($dic_examination_id) {
		
		$data = array(
			'examination_type' => $this->input->post('examination_type'),
			'price' => $this->input->post('price'),
			'from_date' => $this->input->post('from_date'),
			'to_date' => $this->input->post('to_date')
			);
			$this->db->where(array('dic_examination_id'=>$dic_examination_id));
			$this->db->update('dic_examination',$data) ;
	} // create_dic_examination_posts

		public function delete_dic_examination($dic_examination_id) {
			$this->db->where(array('dic_examination_id'=>$dic_examination_id));
			$this->db->delete('dic_examination');


		}


	public function get_countys() {
		$this->db->order_by('county');
		$query = $this->db->get('dic_county');
		return $query->result_array();
	} // get_countys

	public function get_city($county2){
		
		$query = $this->db->get_where('dic_city', array('county2' => $county2));
		//$this->db->last_query() to display the SQL

		
		return $query->result();
	} //get_city

//=====================================consult ========================================

	public function getById_consult_patient_id($patient_id){
				$this->db->order_by('consult_id ASC');
			//$query=$this->db->get_where('consult',array('patient_id'=>$patient_id))->row();
				$query=$this->db->get_where('consult',array('patient_id'=>$patient_id))->result();
					
			return $query;

	}  //getById_patient

	public function consult_saved($patient_id) {
		 //$consult_date= new DateTime('Y-m-d H:i:sP')
		 $consult_date = date('Y-m-d H:i:s');	
		 $user_id= $this->session->userdata('user_id');
		 
		$data = array(
			'ant_pers_ph' => $this->input->post('ant_pers_ph'),
			'ant_pers_pat' => $this->input->post('ant_pers_pat'),
			'ant_heredo_col' => $this->input->post('ant_heredo_col'),
			'enviroment_condition' => $this->input->post('enviroment_condition'),
			'apparatus_circ' =>  $this->input->post('apparatus_circ'),
			'ex_local_and_complem' => $this->input->post('ex_local_and_complem'),
			'personal_antecedents' => $this->input->post('personal_antecedents'),
			'consult_reason' => $this->input->post('consult_reason'),
			'notices' => $this->input->post('notices'),
			'diagnostics' => $this->input->post('diagnostics'),
			'reference' => $this->input->post('reference'),
			'treatment' => $this->input->post('treatment'),
			'patient_id' => $patient_id,
			'user_id' => $user_id,
			'consult_date' => $consult_date
		);
		$query = $this->db->insert('consult',$data) ;
		$consult_insertId = $this->db->insert_id();
//die('####'.$consult_insertId.'****')	;
		// ======salvez EXAMINATION checkbox======
		$checkbox=$this->input->post('examination');
			 	for($i=0; $i<count($checkbox);  $i++)
				 	{
				 	$data = array(
							'dic_examination_id' => $checkbox[$i],
							'consult_id' => $consult_insertId
					);
					$query = $this->db->insert('consult_examination',$data) ;
					
					}


		// ======salvez ANALYSIS checkbox testez daca exista ======
		$checkbox=$this->input->post('analysis');
			 	for($i=0; $i<count($checkbox);  $i++)
				 	{
				 	$data = array(
							'dic_analysis_id' => $checkbox[$i],
							'consult_id' => $consult_insertId
					);
					$query = $this->db->insert('consult_analysis',$data) ;
					
					}	

			//die('####'.$consult_insertId.'****')	;
   			return $consult_insertId;

	} // consult_saved
	
		public function getExamination() 
		{
		$this->db->order_by('dic_examination_id ASC');
		return $this->db->get('dic_examination')->result();
	}// getExamination

		public function getAnalysis() 
		{
		$this->db->order_by('dic_analysis_id ASC');
		return $this->db->get('dic_analysis')->result();
	}// getExamination


//=============================================medical letter=========================================

		public function getCabinet() 
		{
		

		$query = $this->db->get('adm_cabinets')->result();
		$cabinetObj = array_shift($query);

		var_dump($cabinetObj);
		var_dump($cabinetObj->cab_name);
		return $query;

	}// getCabinet

		public function getById_consult_consult_id($consult_id){
				
			//$query=$this->db->get_where('consult',array('patient_id'=>$patient_id))->row();
				$query=$this->db->get_where('consult',array('consult_id'=>$consult_id))->result();
				$query1=$this->db->get_where('consult',array('consult_id'=>$consult_id))->result_array();
				//die('patient_id---'.$query1[0]['patient_id'].'  consult_id  '.$query1[0]['consult_id']);

					
			return $query;
		}


} //CI_model