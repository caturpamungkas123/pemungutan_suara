<?php

namespace App\Controllers\Calon;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $this->calon = new \App\Models\CalonModel();
        $dta = [
            'title' => 'Halaman Calon Ketua',
            'calon' => $this->calon->orderBy('urutan', 'asc')->find(),
        ];
        return view('calon/list', $dta);
    }
}
