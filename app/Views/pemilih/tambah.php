<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<h1 class="h3 mb-2 text-gray-800">Form Tambah Data Pemilih</h1>
<form action="<?php echo base_url('pemilih/pemilih/input') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">NKM</label>
        <div class="col-sm-7">
            <input type="number" name="nkm" class="form-control" placeholder="Masukan Nomer Kartu Mahasiswa">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-7">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Lengkp">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-7">
            <input type="text" name="alamat" class="form-control" id="nama" placeholder="Masukan Alamat">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nomer Telepon</label>
        <div class="col-sm-7">
            <input type="number" name="telepon" class="form-control" id="nama" placeholder="Masukan Nomer Telepon">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-7">
            <input type="text" name="semester" class="form-control" id="nama" placeholder="Masukan Nama Lengkp">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <img src="..." alt="..." class="img-thumbnail">
        <div class="col-sm-7">
            <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <div class="form-group row">
        <div class="justify-content-round">
            <button type="submit" class="btn-primary">Kirim</button>
            <button type="reset" class="btn-success">Reset</button>
        </div>
    </div>
</form>
<?php $this->endSection(); ?>