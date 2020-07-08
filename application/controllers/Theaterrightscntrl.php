<?php
defined ("BASEPATH")or exit ("No direct script acces allowed");
class Theaterrightscntrl extends CI_Controller
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
			$data['editdetails']=$this->Filmauctionmodel->edit($id);
			$this->load->view('distributor/theaterrights',$data);
		}
	}
	public function edit($id)
	{
		$data['details']=$this->Dviewmodel->view();
		
		$data['editdetails']=$this->Theaterauctionmodel->edit($id);
		$this->load->view('distributor/theaterrights',$data);
	}
	public function insert($id)
	{
		
		
		$this->form_validation->set_rules('film_name','film_name','required');
		$this->form_validation->set_rules('pname','pname','required');
		$this->form_validation->set_rules('theater','theater','required');	
		$this->form_validation->set_rules('distributor','distributor','required');
		$this->form_validation->set_rules('tmoney','tmoney','required');
		$this->form_validation->set_rules('film_rights','film_rights','required');
		$this->form_validation->set_rules('image','image','required');
		$this->form_validation->set_rules('status','status','required');
		

		if($this->form_validation->run()==false)
		{

			$this->load->view('distributor/theaterrights');
		}
		else

		
		{
			
				$film_name=$this->input->post('film_name');
				$pname=$this->input->post('pname');
				$theater=$this->input->post('theater');
				$distributor=$this->input->post('distributor');
				$tmoney=$this->input->post('tmoney');
				$film_rights=$this->input->post('film_rights');
				$image=$this->input->post('image');
				$status=$this->input->post('status');
			
			$data1=array('status'=>$status);
			$data=array('pname'=>$pname,'theater'=>$theater,'distributor'=>$distributor,'film_name'=>$film_name,'tmoney'=>$tmoney,'film_rights'=>$film_rights,'image'=>$image,);
			$this->Theaterrightsmodel->insert($data);
			$this->Theaterauctionmodel->update($data1,$id);
			redirect('Dassignmovies');

		}
	} 
}
?>