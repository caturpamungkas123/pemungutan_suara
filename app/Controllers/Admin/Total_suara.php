<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Total_suara extends BaseController
{
    public function index()
    {
        $dta = [
            'title' => 'Total Suara'
        ];
        return view('suara/total', $dta);
    }
}
