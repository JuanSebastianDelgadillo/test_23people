<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

	public function get_all_people()
	{
		$this->db->select('*');
		$this->db->from('peoples');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_people_by_id($nationalId){
		$this->db->select('*');
		$this->db->from('peoples');
		$this->db->where('national_id', $nationalId);
		$query = $this->db->get();
		return $query->result();
	}
	
	  
}


