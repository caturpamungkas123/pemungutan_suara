<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<!-- content -->
<div class="row bg-light px-2 py-2 rounded">
    <div class="col-md-12">
        <h2 class="mb-4">Data Diri Panitia</h2>
        <form action="<?php echo base_url() ?>/admin/panitia/input" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">Id Panitia</label>
                <input type="number" name="id_panitia" class="form-control" id="id">
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" name="alamat" class="form-control" id="alamat">
            </div>
            <div class="form-group">
                <label for="telp">No Telp</label>
                <input type="number" name="telp" class="form-control" id="telp">
            </div>
            <div class="form-group">
                <img src="<?php echo base_url() ?>/img/undraw_profile_1.svg" width="100" class="img-thumbnail">
                <input type="file" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<!-- end content -->
<?php $this->endSection(); ?>