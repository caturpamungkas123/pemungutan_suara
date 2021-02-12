<?php

namespace App\Controllers\Pemilih;

use App\Controllers\BaseController;

class Pemilih extends BaseController
{
    public function index()
    {
        $this->pemilih = new \App\Models\PemilihModel();
        $data = [
            'title' => 'Data Pemilih',
            'pemilih' => $this->pemilih->findAll(),
        ];
        return view('pemilih/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Pemilih'
        ];
        return view('pemilih/tambah', $data);
    }
    public function input()
    {
        $this->pemilih = new \App\Models\PemilihModel();
        $filefoto = $this->request->getFile('foto');
        $namafoto = $filefoto->getRandomName();
        $filefoto->move('img/pemilih', $namafoto);
        $this->pemilih->insert([
            'nkm' => $this->request->getVar('nkm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'semester' => $this->request->getVar('semester'),
            'foto' => $namafoto,
        ]);
        session()->setFlashdata('success', 'Data Behasil Ditambah');
        return redirect()->to('/pemilih/pemilih/index');
    }
    public function hapus($id)
    {
        $this->pemilih = new \App\Models\PemilihModel();
        $foto = $this->pemilih->find($id);
        unlink('img/pemilih/' . $foto['foto']);
        $this->pemilih->where('nkm', $id)->delete();
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to('/pemilih/pemilih/index');
    }
    public function edit($nkm)
    {
        $this->pemilih = new \App\Models\PemilihModel();
        $dta = [
            'title' => 'Form Edit Pemilih',
            'pemilih' => $this->pemilih->find($nkm)
        ];
        return view('pemilih/edit', $dta);
    }
    public function update($nkm)
    {
        $this->pemilih = new \App\Models\PemilihModel();
        // save form edit
        if ($this->request->getFile('foto') == 4) {
            $namafoto = $this->request->getVar('fotoLama');
        } else {
            $filefoto = $this->request->getFile('foto');
            $namafoto = $filefoto->getRandomName();
            $filefoto->move('img/pemilih', $namafoto);
        }
        $update = [
            'nkm' => $this->request->getVar('nkm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'semester' => $this->request->getVar('semester'),
            'foto' => $namafoto,
        ];
        $this->pemilih->update($nkm, $update);
        session()->setFlashdata('success', 'Data Berhasil Diubah');
        return redirect()->to('/pemilih/pemilih/index');
    }
}
