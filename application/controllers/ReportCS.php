<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReportCS extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('Auth');
		}
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

		$options = '<option value="" disabled selected>Pilih Sub Source</option>';
		$has_valid_sub_source = false;

		if ($sub_sources) {
			foreach ($sub_sources as $sub) {
				if ($sub['sub_source'] !== null) {
					$options .= '<option value="' . $sub['sub_source'] . '">' . $sub['sub_source'] . '</option>';
					$has_valid_sub_source = true;
				}
			}
		}

		// Tambahkan atribut disabled jika tidak ada sub_source yang valid
		$disabled_attr = $has_valid_sub_source ? '' : 'disabled';
		echo '<select name="sub_source" id="sub_source" class="form-select" ' . $disabled_attr . '>' . $options . '</select>';
	}
}
