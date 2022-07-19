<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Alogincntrl extends CI_Controller
{
	public function index()
	{
		$this->Aloginmodel->start_session();
		if(!$this->Aloginmodel->is_loggedin())
		{
			$this->load->view('admin/login');
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('admin/login');
		}
		else
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($this->Aloginmodel->login($username,$password))
			{
				$id=$this->Aloginmodel->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('password',$password);
					$this->Aloginmodel->start_session();
					redirect('Ahomecntrl');
				}
			}
			else
			{
				$data['error']='invalid username/password';
				$this->load->view('admin/login');
			}
		}
	}
public function logout()
	{
		$this->Aloginmodel->logout();
		redirect('Alogincntrl');
	}
}
?>