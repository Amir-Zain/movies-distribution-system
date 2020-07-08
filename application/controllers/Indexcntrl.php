<?php
defined("BASEPATH")or exit("No direct script acces allowed");

class Indexcntrl extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');
	}
}