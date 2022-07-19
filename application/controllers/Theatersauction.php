<?php
defined ("BASEPATH")or exit ("No direct script acces allowed");
class Theatersauction extends CI_Controller
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
			
			$this->load->view('theaters/offermoney',$data);
		}
	}
	public function edit($id)
	{
		$data['details']=$this->Tviewmodel->view();
		
		$data['editdetails']=$this->Filmrightsmodel->edit($id);
		$this->load->view('theaters/offermoney',$data);
	}
	public function insert()
	{
		
		

		$this->form_validation->set_rules('film_name','film_name','required');
		
		$this->form_validation->set_rules('pname','pname','required');
		$this->form_validation->set_rules('dmoney','dmoney','required');
		$this->form_validation->set_rules('distributor','distributor','required');
		$this->form_validation->set_rules('auction','auction','required');
		$this->form_validation->set_rules('theater','theater','required');
		$this->form_validation->set_rules('scrcount','scrcount','required');
		$this->form_validation->set_rules('image'	,'image','required');
		
		$this->form_validation->set_rules('status','status','required');

		if($this->form_validation->run()==false)
		{

			$this->load->view('theaters/offermoney');

		}
		else
		{
			
			
			$film_name=$this->input->post('film_name');
			
			$pname=$this->input->post('pname');
			
			
			$dmoney=$this->input->post('dmoney');
			$distributor=$this->input->post('distributor');
			$auction=$this->input->post('auction');
			$theater=$this->input->post('theater');
			$scrcount=$this->input->post('scrcount');
			$image=$this->input->post('image');
			$status=$this->input->post('status');	
			
			$data=array('film_name'=>$film_name,'pname'=>$pname,'dmoney'=>$dmoney,'distributor'=>$distributor,'auction'=>$auction,'theater'=>$theater,'scrcount'=>$scrcount,'image'=>$image,'status'=>$status);
			$this->Theaterauctionmodel->insert($data);
			
			redirect('Tviewavailablefilms');
		}
	}
	public function delete($id)
	{
		$this->Theaterauctionmodel->delete($id);
		redirect('Tviewavailablefilms');
	} 
}
?>