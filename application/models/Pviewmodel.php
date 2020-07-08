<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pviewmodel extends CI_Model{

	public function view()
	{
		
         $my_session_id=$this->session->userdata('username');

		$this->db->select('*');
		$this->db->where('username',$my_session_id);
		$query=$this->db->get('producer_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view1()
	{
		$this->db->select('*')->from('producer_tb');
		$query=$this->db->get();
		return $query->result();
	}
	
}

?>