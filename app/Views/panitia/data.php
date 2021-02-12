<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<a href="<?php echo base_url() ?>/admin/panitia/tambah" class="btn btn-outline-primary mb-4">Tambah Data</a>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo base_url() ?>/img/panitia/" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Catur Pamungkas</h5>
                        <p class="card-text">
                            <ul>
                                <li>id: Catur Pamungkas</li>
                                <li>Alamat : Ampih, Buluspesantren</li>
                                <li>No : 081228652075</li>
                            </ul>
                        </p>
                        <a href="/" class="btn btn-danger btn-sm">Hapus</a>
                        <a href="/" class="btn btn-outline-success btn-sm">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>