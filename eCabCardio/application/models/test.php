

	$q=$this->db->get(['username'=> $username, 'password'=>password])->get('utilizatori');
		if($q->num_rows())
			return TRUE;
	}else{
			return FALSE;
	}




$this->load->library('form_validation');
        $this->form_validation->set_rules('username','Utilizator', 'required');
        $this->form_validation->set_rules('password','Parola', 'required');
        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');