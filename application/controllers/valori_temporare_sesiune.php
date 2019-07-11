	

        // Create session
        //definesc perechile de valori de memorat
    			$user_data = array(
    				'user_id' => $user_id,
    				'name_user_log' => $name_user_log,
    				'logged_in' => true
    			);

    			$this->session->set_userdata($user_data);  // scriu sirul in sesiune

          // new value session
                        $c='new value';
                        $this->session->set_userdata('some_name', $c);

          // citesc valori din sesiune

                       $bb1  = $this->session->userdata('name_user_log');
                       $bb2 = $this->session->userdata('some_name');
                       die('==='.$bb1.'***'.$bb2.'###');