<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'models/M_Base.php';

class M_Status_Reason extends M_Base
{
    protected $table = 'cs_status_reason';

    public function __construct()
    {
        parent::__construct();
    }
}
