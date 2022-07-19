<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tviewcntrl extends CI_Controller{

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
		//print_r($data); exit();
		$this->load->view('theaters/viewdetails',$data);
		}
	}

	
	


	
}
 

?>
