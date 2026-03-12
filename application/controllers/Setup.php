<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        $this->load->model('M_User');
    }

    public function index()
    {

        // Add default admin user
        $admin = $this->db->get_where('cs_users', ['username' => 'admin'])->row();
        if (!$admin) {
            $data = array(
                'username' => 'admin',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s')
            );
            $this->M_User->register($data);
            echo "User `admin` berhasil dibuat dengan password: `password123`.<br>";
        } else {
            echo "User `admin` sudah ada.<br>";
        }

        echo "<br><a href='" . site_url('Auth') . "'>Ke halaman Login</a>";
    }
}
