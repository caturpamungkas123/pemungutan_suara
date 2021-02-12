<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Panitia extends BaseController
{
    public function data()
    {
        $dta = [
            'title' => 'Data Panitia'
        ];
        return view('panitia/data', $dta);
    }
    public function tambah()
    {
        $dta = [
            'title' => 'Form Tambah Panitia'
        ];
        return view('panitia/tambah', $dta);
    }
    public function input()
    {
        $this->panitia = new \App\Models\PanitiaModel();
        $filefoto = $this->request->getFile('foto');
        $namafoto = $filefoto->getRandomName();
        $filefoto->move('img/panitia', $namafoto);
        $this->panitia->insert([
            'id_panitia' => $this->request->getVar('id_panitia'),
            'nama' => $this->request->getVar('nama'),
            'telp' => $this->request->getVar('telp'),
            'alamat' => $this->request->getVar('alamat'),
            'foto' => $namafoto
        ]);
    }
}
