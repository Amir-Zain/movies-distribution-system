<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Tviewavailablefilms extends CI_Controller
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
			$data['details1']=$this->Tviewmodel->view();
			
			$data['details']=$this->Filmrightsmodel->view2();
				
			$this->load->view('theaters/availablefilms',$data);
		}
	}
}
?>