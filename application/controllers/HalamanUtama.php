<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanUtama extends CI_Controller {

	public function index()
	{   
		$data['title'] = 'Dashboard';
		$this->load->view('template/header', $data);
		$this->load->view('template/menu');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}
}
