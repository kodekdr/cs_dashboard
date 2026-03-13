<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'models/M_Base.php';

class M_Agen extends M_Base
{
    protected $table = 'tb_agen';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_agen_list()
    {
        return $this->db->get_where($this->table, ['s_counter' => 'AGEN'])->result_array();
    }
}
