<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'models/M_Base.php';

class M_Case extends M_Base
{
    protected $table = 'cs_case';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_unique_categories()
    {
        $this->db->select('kategori');
        $this->db->distinct();
        $this->db->from($this->table);
        $this->db->order_by('kategori', 'ASC');
        return $this->db->get()->result_array();
    }

    public function get_case_types_by_category($category)
    {
        $this->db->select('tipecase');
        $this->db->distinct();
        $this->db->from($this->table);
        $this->db->where('kategori', $category);
        $this->db->order_by('tipecase', 'ASC');
        return $this->db->get()->result_array();
    }

    public function get_sub_case_types_by_case_type($category, $case_type)
    {
        $this->db->select('subtipecase');
        $this->db->distinct();
        $this->db->from($this->table);
        $this->db->where('kategori', $category);
        $this->db->where('tipecase', $case_type);
        $this->db->order_by('subtipecase', 'ASC');
        return $this->db->get()->result_array();
    }
}
