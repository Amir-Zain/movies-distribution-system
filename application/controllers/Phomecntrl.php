<?php
defined('BASEPATH')OR exit('NO direct script acces allowed');
class Phomecntrl extends CI_Controller
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
				$this->load->view('producer/home',$data);
			}
		
	}
}
?>