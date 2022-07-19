<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Filmcollectionmodel extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('filmcollection_tb',$insert);
	}
	public function view()
	{
		$this->db->select('*')->from('filmcollection_tb');
		$query=$this->db->get();
		return $query->result();
	}
	public function view2()
	{
		
         $my_session_id=$this->session->userdata('username');

		$this->db->select('*');
		$this->db->where('pname',$my_session_id);
		$query=$this->db->get('filmcollection_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}

}
?>