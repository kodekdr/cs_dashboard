<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'models/M_Base.php';

class M_Trx extends M_Base
{
    protected $table = 'cs_trx';

    public function __construct()
    {
        parent::__construct();
    }
}
