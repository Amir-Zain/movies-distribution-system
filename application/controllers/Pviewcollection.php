<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Pviewcollection extends CI_Controller
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
			$data['details']=$this->Pviewmodel->view();
			$data['details1']=$this->Filmcollectionmodel->view2();
			$this->load->view('producer/viewcollection',$data);
		}
	}
}
?>