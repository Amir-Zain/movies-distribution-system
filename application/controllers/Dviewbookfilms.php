<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Dviewbookfilms extends CI_Controller
{
	public function index()
	{
		$this->Dloginmodel->start_session();
		if(!$this->Dloginmodel->is_loggedin())
		{
			$this->load->view('distributor/login');
		}
		else
		{
			
			$data['details1']=$this->Dviewmodel->view();
			$data['details']=$this->Offermoneymodel->view3();
			$this->load->view('distributor/viewbookedfilms',$data);
		}
	}
}
?>