<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<div class="row row-cols-1 row-cols-md-2">
    <?php foreach ($calon as $calon) : ?>
        <form action="" method="POST">
            <div class="col mb-4">
                <div class="card calon">
                    <input id="kotak_suara" type="image" value="<?php echo $calon['urutan'] ?>" class="card-img-top" src="<?php echo base_url() ?>/img/calon/<?php echo $calon['foto'] ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $calon['nama'] ?></h5>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach ?>
</div>
<?php $this->endSection(); ?>