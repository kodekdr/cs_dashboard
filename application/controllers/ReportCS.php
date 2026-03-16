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
		$this->load->model('M_Case');
		$this->load->model('M_Priority');
		$this->load->model('M_Wilayah');
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
		$data['categories'] = $this->M_Case->get_unique_categories();
		$data['priorities'] = $this->M_Priority->get_all();
		$data['kode_wilayah'] = $this->M_Wilayah->get_unique_kode_wilayah();

		$this->load->view('layouts/header', $data);
		$this->load->view('reportcs/add', $data);
		$this->load->view('layouts/footer');
	}

	public function get_case_types()
	{
		$category = $this->input->post('category');
		$case_types = $this->M_Case->get_case_types_by_category($category);

		$options = '<option value="" disabled selected>Pilih Case Type</option>';
		$disabled = empty($case_types) ? 'disabled' : '';

		foreach ($case_types as $type) {
			$options .= '<option value="' . $type['tipecase'] . '">' . $type['tipecase'] . '</option>';
		}

		// Main dropdown for case_type
		echo '<select name="case_type" id="case_type" class="form-select" required ' . $disabled . '
					hx-post="' . base_url('reportcs/get_sub_case_types') . '" 
					hx-target="#sub_case_type_container" 
					hx-trigger="change"
					hx-include="[name=\'category\']">
				' . $options . '
			  </select>';

		echo '<div id="sub_case_type_container" hx-swap-oob="true">
				<select name="sub_case_type" id="sub_case_type" class="form-select" required disabled>
					<option value="" disabled selected>Pilih Sub Case Type</option>
				</select>
			  </div>';
	}

	public function get_sub_case_types()
	{
		$category = $this->input->post('category');
		$case_type = $this->input->post('case_type');
		$sub_case_types = $this->M_Case->get_sub_case_types_by_case_type($category, $case_type);

		$options = '<option value="" disabled selected>Pilih Sub Case Type</option>';
		$disabled = empty($sub_case_types) ? 'disabled' : '';

		foreach ($sub_case_types as $sub) {
			$options .= '<option value="' . $sub['subtipecase'] . '">' . $sub['subtipecase'] . '</option>';
		}

		echo '<select name="sub_case_type" id="sub_case_type" class="form-select" required ' . $disabled . '>
				' . $options . '
			  </select>';
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

		// Re-initialize TomSelect
		if ($disabled === '') {
			$html .= "<script>new TomSelect('#agen',{create: false,sortField: {field: 'text',direction: 'asc'}});</script>";
		}

		echo $html;
	}

	public function get_origin_dropdown()
	{
		$id = $this->input->post('origin_city_code');
		$wilayah_list = $this->M_Wilayah->get_nama_wilayah_by_id($id);

		$disabled = empty($wilayah_list) ? 'disabled' : '';

		$html = '<select name="origin" id="origin" class="form-select" ' . $disabled . '>';
		$html .= '<option value="" disabled selected>Pilih Origin</option>';
		foreach ($wilayah_list as $w) {
			$html .= '<option value="' . $w['id'] . '">' . $w['nama_wilayah'] . '</option>';
		}
		$html .= '</select>';

		// Re-initialize TomSelect
		if ($disabled === '') {
			$html .= "<script>new TomSelect('#origin',{create: false,sortField: {field: 'text',direction: 'asc'}});</script>";
		}

		echo $html;
	}

	public function get_destination_dropdown()
	{
		$id = $this->input->post('destination_city_code');
		$wilayah_list = $this->M_Wilayah->get_nama_wilayah_by_id($id);

		$disabled = empty($wilayah_list) ? 'disabled' : '';

		$html = '<select name="destination_city" id="destination_city" class="form-select" ' . $disabled . '>';
		$html .= '<option value="" disabled selected>Pilih Dest City</option>';
		foreach ($wilayah_list as $w) {
			$html .= '<option value="' . $w['id'] . '">' . $w['nama_wilayah'] . '</option>';
		}
		$html .= '</select>';

		// Re-initialize TomSelect after HTMX swap
		if ($disabled === '') {
			$html .= "<script>new TomSelect('#destination_city',{create: false,sortField: {field: 'text',direction: 'asc'}});</script>";
		}

		echo $html;
	}
}
