<?php
defined('BASEPATH')OR exit('NO direct script acces allowed');
class Dhomecntrl extends CI_Controller
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
				$this->load->view('distributor/home',$data);
			}
		
	}
}
?>