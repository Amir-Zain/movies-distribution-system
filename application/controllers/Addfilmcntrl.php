<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Addfilmcntrl extends CI_Controller
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
			$data['details1']=$this->Pviewmodel->view();
			$data['details']=$this->Addfilmmodel->view();
			$this->load->view('producer/addfilm',$data);
		}
	}
	public function insert()
	{
		$config['upload_path']='./upload/';
		$config['allowed_types']='gif|png|jpg';
		$config['max_size']='';
		$config['max_width']='';
		$config['max_hieght']='';
		$this->load->library('upload',$config);

		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('dname','dname','required');
		$this->form_validation->set_rules('pname','pname','required');
		$this->form_validation->set_rules('actor','actor','required');
		$this->form_validation->set_rules('actress','actress','required');
		$this->form_validation->set_rules('budget','budget','required');
		$this->form_validation->set_rules('genre','genre','required');
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->Addfilmmodel->view();
			$this->load->view('producer/addfilm',$data);
		}
		else
		{
			if(!$this->upload->do_upload('image'))
			{
				$data['error']=$this->upload->display_errors();
				$this->load->view('producer/addfilm',$data);
			}
			else
			{
				$image=$this->upload->data('file_name');
			}
			$name=$this->input->post('name');
			$dname=$this->input->post('dname');
			$pname=$this->input->post('pname');
			$actor=$this->input->post('actor');
			$actress=$this->input->post('actress');
			$budget=$this->input->post('budget');
			$genre=$this->input->post('genre');
			$data=array('name'=>$name,'dname'=>$dname,'pname'=>$pname,'actor'=>$actor,'actress'=>$actress,'budget'=>$budget,'genre'=>$genre,'image'=>$image);
			$this->Addfilmmodel->insert($data);
			redirect('Addfilmcntrl');
		}


	}
	public function delete($id)
	{
		$this->Addfilmmodel->delete($id);
		redirect('Addfilmcntrl');
	}
}
?>