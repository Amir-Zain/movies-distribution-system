<?php
defined("BASEPATH")or exit("No direct script acces allowed");

class Offermoneymodel extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert("filmauction_tb",$insert);
	}
	public function view()
	{
		
         $my_session_id=$this->session->userdata('username');

		$this->db->select('*');
		$this->db->where('distributor',$my_session_id);
		$query=$this->db->get('filmauction_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view1()
	{
		$this->db->select('*')->from('filmauction_tb');
		$query=$this->db->get();
		
		return $query->result();
	}
	public function view2()
	{
		
         $my_session_id=$this->session->userdata('username');

		
		$query=$this->db->query("SELECT * FROM filmauction_tb where status='1' and pname='$my_session_id'");
		
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view3()
	{
		
         $my_session_id=$this->session->userdata('username');

		
		$query=$this->db->query("SELECT * FROM filmauction_tb where status='0' and distributor='$my_session_id'");
		
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function edit($id)
	{
		$this->db->select('*')->from('filmauction_tb');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
	public function update($data1,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('filmauction_tb',$data1);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('filmauction_tb');
	}
	
}
?>