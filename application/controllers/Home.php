<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('dashboard');
	}

	public function not_found()
	{
		$this->load->view('404');
	}
}
