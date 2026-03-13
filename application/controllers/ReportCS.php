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
		$this->load->model('M_Status_Caller');
		$this->load->model('M_Agen');
		$this->load->model('M_Express');
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
		$data['status_callers'] = $this->M_Status_Caller->get_all();
		$data['agens'] = $this->M_Agen->get_agen_list();
		$data['express_list'] = $this->M_Express->get_all();

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
					$options .= '<option value="' . $sub['id'] . '">' . $sub['sub_source'] . '</option>';
					$has_valid_sub_source = true;
				}
			}
		}

		// Tambahkan atribut disabled jika tidak ada sub_source yang valid
		$disabled_attr = $has_valid_sub_source ? '' : 'disabled';
		echo '<select name="sub_source" id="sub_source" class="form-select" ' . $disabled_attr . '>' . $options . '</select>';
	}

	public function get_agen_dropdown()
	{
		$status_caller_id = $this->input->post('status_caller');
		$status_caller = $this->db->get_where('cs_status_caller', ['id' => $status_caller_id])->row();

		$disabled = 'disabled';
		if ($status_caller && $status_caller->status_caller_name === 'SENDING OFFICE') {
			$disabled = '';
		}

		$this->load->model('M_Agen');
		$agens = $this->M_Agen->get_agen_list();

		$html = '<select name="agen" id="agen" class="form-select" ' . $disabled . '>';
		$html .= '<option value="" disabled selected>Pilih Agen</option>';
		foreach ($agens as $agen) {
			$html .= '<option value="' . $agen['id_agen'] . '">AGEN ' . $agen['nama_counter'] . '</option>';
		}
		$html .= '</select>';

		// Re-initialize TomSelect after HTMX swap
		if ($disabled === '') {
			$html .= "<script>new TomSelect('#agen',{create: false,sortField: {field: 'text',direction: 'asc'}});</script>";
		}

		echo $html;
	}
}
