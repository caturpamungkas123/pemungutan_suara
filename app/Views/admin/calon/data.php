<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<div class="row">
    <?php foreach ($calon as $c) : ?>
        <div class="card col-12 col-sm-6 mb-3">
            <div class="rounded-pill bg-info text-center">
                <h1><?php echo $c['urutan'] ?></h1>
            </div>
            <img src="<?php echo base_url() ?>/img/calon/<?php echo $c['foto'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h1 class="text-center mb-3"><?php echo $c['nama'] ?></h1>
                <h4 class="text-center card-title">Visi</h4>
                <p class="card-text"><?php echo $c['visi'] ?></p>
                <h4 class="card-title text-center">Misi</h4>
                <p class="card-text"><?php echo $c['misi'] ?></p>
                <a href class="btn btn-success btn-block">Edit</a>
                <a href="" class="btn btn-danger btn-block">Delete</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?php $this->endSection(); ?>