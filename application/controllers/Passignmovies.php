<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Passignmovies extends CI_Controller
{
	public function index()
	{
		$this->Ploginmodel->start_session();
		if(!$this->Ploginmodel->is_loggedin())
		{
			$this->load->view('producer/login');
		}
		else
		{
			$data['details1']=$this->Pviewmodel->view();
			$data['details']=$this->Offermoneymodel->view2();
			$this->load->view('producer/assignmovies',$data);
		}
	}
}
?>