<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Dlogincntrl extends CI_Controller
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
			$this->load->view('distributor/login');
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('distributor/login');
		}
		else
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($this->Dloginmodel->login($username,$password))
			{
				$id=$this->Dloginmodel->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('password',$password);
					$this->Dloginmodel->start_session();
					redirect('Dhomecntrl');
				}
			}
			else
			{
				$data['error']='invalid username/password';
				$this->load->view('distributor/login');
			}
		}
	}
public function logout()
	{
		$this->Dloginmodel->logout();
		redirect('Dlogincntrl');
	}
}
?>