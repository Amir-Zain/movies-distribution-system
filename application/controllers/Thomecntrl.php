<?php
defined('BASEPATH')OR exit('NO direct script acces allowed');
class Thomecntrl extends CI_Controller
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
				$this->load->view('theaters/home',$data);
			}
		
	}
}
?>