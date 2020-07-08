<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Plogincntrl extends CI_Controller
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
			$this->load->view('producer/login');
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('producer/login');
		}
		else
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($this->Ploginmodel->login($username,$password))
			{
				$id=$this->Ploginmodel->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('password',$password);
					$this->Ploginmodel->start_session();
					redirect('Phomecntrl');
				}
			}
			else
			{
				$data['error']='invalid username/password';
				$this->load->view('producer/login');
			}
		}
	}
public function logout()
	{
		$this->Aloginmodel->logout();
		redirect('Plogincntrl');
	}
}
?>