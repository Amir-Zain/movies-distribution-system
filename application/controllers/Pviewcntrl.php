<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pviewcntrl extends CI_Controller{

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
		//print_r($data); exit();
		$this->load->view('producer/viewprofile',$data);
		}
	}

	public function view()

	{

		$data['details']=$this->Pviewmodel->view();
		$this->load->view('producer/viewprofile',$data);
	}
	


	
}
 

?>
