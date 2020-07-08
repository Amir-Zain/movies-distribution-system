<?php
defined('BASEPATH')or exit("No direct script acces allowed");
class Theaterrightsmodel extends CI_Model
{
	public function insert($insert)
	{

		$this->db->insert("theater_rights",$insert);
	}
	public function view()
	{
		
         $my_session_id=$this->session->userdata('theater');

		$this->db->select('*');
		$this->db->where('theater',$my_session_id);
		$query=$this->db->get('theater_rights');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function edit($id)
	{
		$this->db->select('*')->from('theater_rights');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
	
}
?>