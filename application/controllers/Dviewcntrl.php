<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dviewcntrl extends CI_Controller{

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
		//print_r($data); exit();
		$this->load->view('distributor/viewdetails',$data);
		}
	}

	
	


	
}
 

?>
