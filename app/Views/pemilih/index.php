<?php $this->extend('layout/templet'); ?>
<?php $this->section('content'); ?>
<!-- Begin Page Content -->

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pemilih</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="d-inline m-0 font-weight-bold text-primary">Data Pemilih Tetap</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Foto</th>
                        <th>NKM</th>
                        <th>Nama Pemilih</th>
                        <th>Alamat</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Foto</th>
                        <th>NKM</th>
                        <th>Nama Pemilih</th>
                        <th>Alamat</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pemilih as $pemilih) : ?>
                        <tr class="text-center">
                            <td><?php echo $i++ ?></td>
                            <td>
                                <img src="<?php echo base_url() ?>/img/pemilih/<?php echo $pemilih['foto'] ?>" width="130" height="100" class="img-thumbnail">
                            </td>
                            <td><?php echo $pemilih['nkm'] ?></td>
                            <td><?php echo $pemilih['nama'] ?></td>
                            <td><?php echo $pemilih['alamat'] ?></td>
                            <td><?php echo $pemilih['semester'] ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>/pemilih/pemilih/edit/<?php echo $pemilih['nkm'] ?>" class="btn btn-primary"><i> <i class="fa fa-user"></i></i> Edit</a>
                                <a href="<?php echo base_url() ?>/pemilih/pemilih/hapus/<?php echo $pemilih['nkm'] ?>" class="btn btn-danger hapus btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $this->endSection(); ?>