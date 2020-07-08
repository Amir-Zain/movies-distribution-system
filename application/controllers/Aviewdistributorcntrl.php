<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Aviewdistributorcntrl extends CI_Controller
{
	public function index()
	{
		$this->Aloginmodel->start_session();
		if(!$this->Aloginmodel->is_loggedin())
		{
			$this->load->view('admin/login');
		}
		else
		{
			
			$data['details']=$this->Dviewmodel->view1();
			$this->load->view('admin/viewdistributor',$data);
		}
	}
}
?>