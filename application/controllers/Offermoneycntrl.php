<?php
defined ("BASEPATH")or exit ("No direct script acces allowed");
class Offermoneycntrl extends CI_Controller
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
			$data['editdetails']=$this->Addfilmmodel->edit($id);
			$this->load->view('distributor/offermoney',$data);
		}
	}
	public function edit($id)
	{
		$data['details']=$this->Dviewmodel->view();
		
		$data['editdetails']=$this->Addfilmmodel->edit($id);
		$this->load->view('distributor/offermoney',$data);
	}
	public function insert()
	{
		
		

		$this->form_validation->set_rules('film_name','film_name','required');
		$this->form_validation->set_rules('dname','dname','required');
		$this->form_validation->set_rules('pname','pname','required');
		$this->form_validation->set_rules('dname','dname','required');
		$this->form_validation->set_rules('actor','actor','required');
		$this->form_validation->set_rules('actress','actress','required');
		$this->form_validation->set_rules('budget','budget','required');
		$this->form_validation->set_rules('genre','genre','required');
		$this->form_validation->set_rules('auction','auction','required');
		$this->form_validation->set_rules('image','image','required');
		$this->form_validation->set_rules('distributor','distributor','required');
		$this->form_validation->set_rules('status','status','required');

		if($this->form_validation->run()==false)
		{

			$this->load->view('distributor/offermoney');

		}
		else
		{
			
			
			$film_name=$this->input->post('film_name');
			$dname=$this->input->post('dname');
			$pname=$this->input->post('pname');
			
			$actor=$this->input->post('actor');
			$actress=$this->input->post('actress');
			$budget=$this->input->post('budget');
			$genre=$this->input->post('genre');
			$auction=$this->input->post('auction');
			$distributor=$this->input->post('distributor');
			$image=$this->input->post('image');
			$status=$this->input->post('status');
			
			$data=array('film_name'=>$film_name,'dname'=>$dname,'pname'=>$pname,'actor'=>$actor,'actress'=>$actress,'budget'=>$budget,'genre'=>$genre,'auction'=>$auction,'distributor'=>$distributor,'image'=>$image,'status'=>$status);
			$this->Offermoneymodel->insert($data);
			
			redirect('Dviewbookfilms');
		}
	}
	public function delete($id)
	{
		$this->Offermoneymodel->delete($id);
		redirect('Passignmovies');
	} 
}
?>