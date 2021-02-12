<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<h1 class="text-center h3 mb-5 text-gray-800">Form Tambah Data Pemilih</h1>
<form action="<?php echo base_url('admin/calon/input') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">No KTM</label>
        <div class="col-sm-7">
            <input type="number" name="nkm" class="form-control" placeholder="Nomor Kartu Mahasiswa">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Calon</label>
        <div class="col-sm-7">
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nomer Urut</label>
        <div class="col-sm-7">
            <input type="number" name="urutan" class="form-control" placeholder="Nama Lengkap">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Visi</label>
        <div class="col-sm-7">
            <textarea id="visi" name="visi" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-7">
            <select name="semester" class="form-control" id="exampleFormControlSelect1">
                <option value="semester 1">Semester 1</option>
                <option value="semester 2">Semester 2</option>
                <option value="semester 3">Semester 3</option>
                <option value="semester 4">Semester 4</option>
                <option value="semester 5">Semester 5</option>
                <option value="semester 6">Semester 6</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Misi</label>
        <div class="col-sm-7">
            <textarea id="" name="misi" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
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
    <script>
        // CKEDITOR.replace('vsi');
    </script>
</form>
<?php $this->endSection(); ?>