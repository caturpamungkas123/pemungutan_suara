<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<h1 class="h3 mb-2 text-gray-800">Form Edit Data Pemilih</h1>
<form action="<?php echo base_url() ?>/pemilih/pemilih/update/<?php echo $pemilih['nkm'] ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="fotoLama" value="<?php echo $pemilih['foto'] ?>">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">NKM</label>
        <div class="col-sm-7">
            <input type="number" name="nkm" class="form-control" value="<?php echo $pemilih['nkm'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-7">
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pemilih['nama'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-7">
            <input type="text" name="alamat" class="form-control" id="nama" value="<?php echo $pemilih['alamat'] ?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nomer Telepon</label>
        <div class="col-sm-7">
            <input type="number" name="telepon" class="form-control" id="nama" value="<?php echo $pemilih['telepon'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-7">
            <input type="text" name="semester" class="form-control" id="nama" value="<?php echo $pemilih['semester'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <img width="130" height="100" src="<?php echo base_url() ?>/img/pemilih/<?php echo $pemilih['foto'] ?>" alt="..." class="img-thumbnail">
        <div class="col-sm-7">
            <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <div class="form-group row">
        <div class="justify-content-round">
            <button type="submit" class="btn-primary">Kirim</button>
            <button type="reset" class="btn-success">Hapus</button>
        </div>
    </div>
</form>
<?php $this->endSection(); ?>