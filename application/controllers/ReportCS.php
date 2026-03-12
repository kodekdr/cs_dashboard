<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReportCS extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Source');
	}

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
		$data['sources'] = $this->M_Source->get_unique_source();

		$this->load->view('layouts/header', $data);
		$this->load->view('reportcs/add', $data);
		$this->load->view('layouts/footer');
	}

	public function get_sub_source()
	{
		$source = $this->input->post('source');
		$sub_sources = $this->M_Source->get_sub_source_by_source($source);
		echo json_encode($sub_sources);
	}
}
