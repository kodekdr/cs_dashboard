<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function index()
    {
        if ($this->session->userdata('user_id')) {
            redirect('ReportCS');
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_User->login($username, $password);

        if ($user) {
            $session_data = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'full_name' => $user['full_name'],
                'logged_in' => TRUE
            ];

            $this->session->set_userdata($session_data);
            redirect('ReportCS');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah!');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }
}
