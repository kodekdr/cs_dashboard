<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
    protected $table = 'cs_users';

    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $user = $this->db->get_where($this->table, ['username' => $username])->row_array();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function register($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->db->insert('cs_users', $data);
    }
}
