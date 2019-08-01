<?php
class Register_model extends CI_Model{


	public function insert($data)
	{
		$this->db->insert('user',$data);	
	}
}