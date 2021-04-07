<?php

class Encryptmod extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	
	} 
	public function register($records)
	{
		$result = $this->db->insert('user',$records);
		return $result;
	}
	public function display()
	{
		$result = $this->db->get('user');
		return $result->result();
	}

}