<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kotak_suara extends BaseController
{
    public function index()
    {
        $dta = [
            'title' => 'Kotak Suara'
        ];
        return view('kotak_suara/admin/index', $dta);
    }
}
