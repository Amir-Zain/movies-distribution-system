<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Dassignmovies extends CI_Controller
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
			$data['details']=$this->Dviewmodel->view();
			$data['details1']=$this->Theaterauctionmodel->view();
			$this->load->view('distributor/assignmovies',$data);
		}
	}
}
?>