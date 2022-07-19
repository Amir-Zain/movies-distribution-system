<?php
defined ("BASEPATH")or exit ("No direct script acces allowed");
class Filmrightscntrl extends CI_Controller
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
			$data['editdetails']=$this->Offermoneymodel->edit($id);
			$this->load->view('producer/filmrights',$data);
		}
	}
	public function edit($id)
	{
		$data['details']=$this->Pviewmodel->view();
		
		$data['editdetails']=$this->Offermoneymodel->edit($id);
		$this->load->view('producer/filmrights',$data);
	}
	public function insert($id)
	{
		
		
		$this->form_validation->set_rules('pname','pname','required');
		$this->form_validation->set_rules('distributor','distributor','required');	
		$this->form_validation->set_rules('film_name','film_name','required');
		$this->form_validation->set_rules('money','money','required');
		$this->form_validation->set_rules('film_rights','film_rights','required');
		$this->form_validation->set_rules('image','image','required');
		$this->form_validation->set_rules('status','status','required');
		

		if($this->form_validation->run()==false)
		{

			$this->load->view('producer/filmrights');

		}
		else
		{
			
			$pname=$this->input->post('pname');
			$distributor=$this->input->post('distributor');
			$film_name=$this->input->post('film_name');
			$money=$this->input->post('money');
			$film_rights=$this->input->post('film_rights');
			$image=$this->input->post('image');
			$status=$this->input->post('status');
			
			$data1=array('status'=>$status);
			$data=array('pname'=>$pname,'distributor'=>$distributor,'film_name'=>$film_name,'money'=>$money,'film_rights'=>$film_rights,'image'=>$image);
			$this->Filmrightsmodel->insert($data);
			$this->Offermoneymodel->update($data1,$id);
			redirect('Passignmovies');

		}
	} 
}
?>