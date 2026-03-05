<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard - CS Dashboard';

		$this->load->view('layouts/header', $data);
		$this->load->view('home_view');
		$this->load->view('layouts/footer');
	}
}
