<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Aviewfilmscntrl extends CI_Controller
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
			
			$data['details']=$this->Addfilmmodel->view();
			$this->load->view('admin/viewfilms',$data);
		}
	}
}
?>