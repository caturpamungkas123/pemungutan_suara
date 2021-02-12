<?php

namespace App\Controllers\suara;

use \App\Controllers\BaseController;

class Kotak_suara extends BaseController
{
    protected $calon;
    public function __construct()
    {
        $this->calon = new \App\Models\CalonModel();
    }
    public function index()
    {
        $dta = [
            'title' => 'Kotak Suara | Pemilih',
            'calon' => $this->calon->orderBy('urutan', 'asc')->find()
        ];
        return view('kotak_suara/pemilih/index', $dta);
    }
}
