<?php

namespace App\Controllers\Pemilih;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Halaman Dashboard Admin',
            'pemilih' => $this->pemilih->countAll(),
            'calon' => $this->calon->countAll(),
            'panitia' => $this->panitia->countAll()

        ];
        return view('pemilih/dashboard', $data);
    }
}
