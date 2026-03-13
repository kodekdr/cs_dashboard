<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'models/M_Base.php';

class M_Source extends M_Base
{
    protected $table = 'cs_source';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_unique_source()
    {
        return $this->db->select('MIN(id) as id, source')->group_by('source')->get($this->table)->result_array();
    }

    public function get_sub_source_by_source($source)
    {
        // Jika $source adalah ID (angka), cari dulu nama sourcenya
        if (is_numeric($source)) {
            $source_row = $this->db->get_where($this->table, ['id' => $source])->row_array();
            $source = $source_row ? $source_row['source'] : '';
        }

        return $this->db->get_where($this->table, ['source' => $source])->result_array();
    }
}
