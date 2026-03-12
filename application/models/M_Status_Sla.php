<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'models/M_Base.php';

class M_Status_Sla extends M_Base
{
    protected $table = 'cs_status_sla';

    public function __construct()
    {
        parent::__construct();
    }
}
