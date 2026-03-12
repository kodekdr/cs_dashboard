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
        return $this->db->select('source')->distinct()->get($this->table)->result_array();
    }

    public function get_sub_source_by_source($source)
    {
        return $this->db->get_where($this->table, ['source' => $source])->result_array();
    }
}
