<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'models/M_Base.php';

class M_Wilayah extends M_Base
{
    protected $table = 'cs_wilayah';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_unique_kode_wilayah()
    {
        return $this->db->select('MIN(id) as id, kode_wilayah')
            ->group_by('kode_wilayah')
            ->get($this->table)
            ->result_array();
    }

    public function get_nama_wilayah_by_id($id)
    {
        $wilayah = $this->db->get_where($this->table, ['id' => $id])->row_array();
        if (!$wilayah) return [];

        return $this->db->get_where($this->table, ['kode_wilayah' => $wilayah['kode_wilayah']])->result_array();
    }
}
