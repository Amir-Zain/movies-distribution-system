<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Addfilmmodel extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('addfilm_tb',$insert);
	}
	public function view()
	{
		$this->db->select('*')->from('addfilm_tb');
		$query=$this->db->get();
		
		return $query->result();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('addfilm_tb');
	}
	public function edit($id)
	{
		$this->db->select('*')->from('addfilm_tb');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
}
?>