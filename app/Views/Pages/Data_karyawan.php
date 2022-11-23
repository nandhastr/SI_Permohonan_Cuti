<?php  $this->extend('layout/tamplate'); ?>

<?php $this->section('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Data karyawan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Tabel Karyawan yang sedang cuti -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->

      <h2><b>Data Karyawan PT. .....</b></h2> <br>
      <a href="Tambah_data_karyawan" class="btn btn-success">Tambah Data</a>

      <!-- Main content -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="mt-25">Data Karyawan </h3>


              <!-- alert data berhasil di masukan -->
              <?php if (session()->getFlashdata('pesan')): ?>

              <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
              </div>
              
              <?php endif; ?>
              
            </div>
            <!-- ./card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No telpon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Tanggal di tambahkan</th>
                    <th>Aksi</th>

                  </tr>
                </tbody>
                <tbody>
                  <?php $i =1; ?>

                  <?php foreach ($cuti as $row): ?>
                  <tr data-widget="expandable-table" aria-expanded="false">

                    <td><?= $i++; ?></td>
                    <td><?= $row['nip']; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['jns_klmn']; ?></td>
                    <td><?= $row['no_telp']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['jabatan']; ?></td>
                    <td><?= $row['created_at']; ?></td>
                    <td>
                      <a href="">Hapus</a> &nbsp;<b>|</b>&nbsp;
                      <a href="">Edit</a>
                    </td>

                  </tr>
                  <?php endforeach; ?>

                  <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
<?php $this->endSection(); ?>