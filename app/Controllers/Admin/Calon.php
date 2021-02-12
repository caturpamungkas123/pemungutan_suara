<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Calon extends BaseController
{
    public function data()
    {
        $this->calon = new \App\Models\CalonModel();
        $dta = [
            'calon' => $this->calon->orderBy('urutan', 'asc')->find(),
            'title' => 'Data Calon Katua'
        ];
        return view('admin/calon/data', $dta);
    }
    public function tambah()
    {
        $dta = [
            'title' => 'Tambah Calon Ketua'
        ];
        return view('admin/calon/tambah', $dta);
    }
    public function input()
    {
        $this->calon = new \App\Models\CalonModel();
        $filefoto = $this->request->getFile('foto');
        $namafoto = $filefoto->getRandomName();
        $filefoto->move('img/calon', $namafoto);
        $this->calon->insert([
            'nkm' => $this->request->getVar('nkm'),
            'nama' => $this->request->getVar('nama'),
            'urutan' => $this->request->getVar('urutan'),
            'semester' => $this->request->getVar('semester'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi'),
            'foto' => $namafoto
        ]);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin/calon/tambah');
    }
}
