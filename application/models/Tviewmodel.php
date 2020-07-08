<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tviewmodel extends CI_Model{

	public function view()
	{
		
         $my_session_id=$this->session->userdata('theater');

		$this->db->select('*');
		$this->db->where('theater',$my_session_id);
		$query=$this->db->get('theater_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view1()
	{
		$this->db->select('*')->from('theater_tb');
		$query=$this->db->get();
		return $query->result();
	}
	
}

?>