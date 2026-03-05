<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReportCS extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard - Report CS';

		$this->load->view('layouts/header', $data);
		$this->load->view('reportcs/index');
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Report CS';

		$this->load->view('layouts/header', $data);
		$this->load->view('reportcs/add');
		$this->load->view('layouts/footer');
	}
}
