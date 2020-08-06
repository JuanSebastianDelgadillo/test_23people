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
		$this->db->where('nationalId', $nationalId);
		$query = $this->db->get();
		return $query->result();
	}

	public function save_data($data){
		
		$this->db->select('*');
		$this->db->from('peoples');
		$this->db->where('nationalId', $data['nationalId']);
		$query = $this->db->get();
		$resp = $query->num_rows();

		if ($resp != 1) {
			$this->db->insert('peoples',$data);
			return 1;
		}else{
			 return 0;
		}
		
	}

	public function delete_person($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('peoples');
		return $this->db->affected_rows();
	}

	
	
	  
}


