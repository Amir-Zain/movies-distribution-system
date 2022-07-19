<?php
defined('BASEPATH')or exit("No direct script acces allowed");
class Filmrightsmodel extends CI_Model
{
	public function insert($insert)
	{

		$this->db->insert("distributor_rights",$insert);
	}
	public function view()
	{
		
         $my_session_id=$this->session->userdata('username');

		$this->db->select('*');
		$this->db->where('distributor',$my_session_id);
		$query=$this->db->get('distributor_rights');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view2()
	{
		$this->db->select('*')->from('distributor_rights');
		$query=$this->db->get();
		return $query->result();
	}
	public function edit($id)
	{
		$this->db->select('*')->from('distributor_rights');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
}


?>