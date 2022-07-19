<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Tviewbookfilms extends CI_Controller
{
	public function index()
	{
		$this->Tloginmodel->start_session();
		if(!$this->Tloginmodel->is_loggedin())
		{
			$this->load->view('theaters/login');
		}
		else
		{
			
			$data['details']=$this->Tviewmodel->view();
			$data['details1']=$this->Theaterauctionmodel->view2();
			$this->load->view('theaters/viewbookedfilms',$data);
		}
	}
}
?>