<?php
defined ("BASEPATH")or exit ("No direct script acces allowed");
class Updatecollection extends CI_Controller
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
			$data['editdetails']=$this->Theaterrightsmodel->edit($id);
			$this->load->view('theaters/updatemoney',$data);
		}
	}
	public function edit($id)
	{
		$data['details']=$this->Tviewmodel->view();
		
		$data['editdetails']=$this->Theaterrightsmodel->edit($id);
		$this->load->view('theaters/updatemoney',$data);
	}
	public function insert()
	{
		
		

		$this->form_validation->set_rules('film_name','film_name','required');
		
		$this->form_validation->set_rules('pname','pname','required');
		
		$this->form_validation->set_rules('theater','theater','required');
		$this->form_validation->set_rules('distributor','distributor','required');
		$this->form_validation->set_rules('date','date','required');
		$this->form_validation->set_rules('collection','collection','required');
		$this->form_validation->set_rules('image','image','required');
		
		

		if($this->form_validation->run()==false)
		{

			$this->load->view('distributor/updatemoney');

		}
		else
		{
			
			
			$film_name=$this->input->post('film_name');
			
			$pname=$this->input->post('pname');
			
			$theater=$this->input->post('theater');
			$distributor=$this->input->post('distributor');
			$date=$this->input->post('date');
			$collection=$this->input->post('collection');
			
			
			$image=$this->input->post('image');
			
			
			$data=array('film_name'=>$film_name,'pname'=>$pname,'theater'=>$theater,'distributor'=>$distributor,'date'=>$date,'collection'=>$collection,'image'=>$image);
			$this->Filmcollectionmodel->insert($data);
			
			redirect('Tupdtcollecntrl');
		}
	}
	
}
?>