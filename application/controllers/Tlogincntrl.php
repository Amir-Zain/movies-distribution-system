<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Tlogincntrl extends CI_Controller
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
			$this->load->view('theaters/login');
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('theater','theater','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('theaters/login');
		}
		else
		{
			$theater=$this->input->post('theater');
			$password=$this->input->post('password');
			if($this->Tloginmodel->login($theater,$password))
			{
				$id=$this->Tloginmodel->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('theater',$theater);
					$this->session->set_userdata('password',$password);
					$this->Tloginmodel->start_session();
					redirect('Thomecntrl');
				}
			}
			else
			{
				$data['error']='invalid username/password';
				$this->load->view('theaters/login');
			}
		}
	}
public function logout()
	{
		$this->Tloginmodel->logout();
		redirect('Tlogincntrl');
	}
}
?>