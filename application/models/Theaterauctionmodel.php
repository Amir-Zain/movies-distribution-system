<?php
defined("BASEPATH")or exit("No direct script acces allowed");

class Theaterauctionmodel extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert("theaterauction_tb",$insert);
	}
	public function view()
	{
		
         $my_session_id=$this->session->userdata('username');

		
		$query=$this->db->query("SELECT * FROM theaterauction_tb where status='0' and distributor='$my_session_id'");
		
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('theateruction_tb');
	}
	public function edit($id)
	{
		$this->db->select('*')->from('theaterauction_tb');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
	public function update($data1,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('theaterauction_tb',$data1);
	}
	public function view2()
	{
		
         $my_session_id=$this->session->userdata('theater');

		
		$query=$this->db->query("SELECT * FROM theaterauction_tb where status='0' and theater='$my_session_id'");
		
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
}
?>