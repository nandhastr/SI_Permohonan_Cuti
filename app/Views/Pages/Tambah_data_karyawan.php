<?php echo $this->extend('layout/tamplate'); ?>

<?php $this->section('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <img src="" alt="logo perusahaan">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
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

            <h2><b>Form Tambah Karyawan PT. .....</b></h2> <br>




            <!-- Main content -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Karyawan </h3>
                        </div>
                        <!-- ./card-header -->
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <div class="card card-primary card-outline">

                                            <div class="card-body">
                                                <h5 class="card-title">Tambah Data Pegawai</h5> <br>

                                                <!-- cetak validasi cek semua error -->
                                                    <?= $validation->listErrors(); ?>
                                                    
                                                    <!-- Main content -->
                                                <section class="content">
                                                    <div class="container-fluid">
                                                        
                                                    <!-- form -->
                                                        <form action="<?php echo base_url('/Page/save') ?>" method="POST"
                                                            enctype="multipart/form-data">


                                                            <?= csrf_field(); ?>


                                                                <div class="form-group row">
                                                                    <label for="NIP"
                                                                        class="col-sm-2 col-form-label">NIP</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control <?= ($validation->hasError('nip'))?'is-invalid':''; ?>" id="NIP"
                                                                            placeholder="No Registrasi Pegawai"
                                                                            autofocus   name="nip" value="<?= old('nip'); ?>">
                                                                            <div class="valid-feedback">
                                                                                <?= $validation->getError('nip'); ?>
                                                                            </div>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="nama"
                                                                        class="col-sm-2 col-form-label">Nama
                                                                        lengkap</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            id="nama" placeholder="nama lengkap"
                                                                            name="nama" value="<?= old('nama'); ?>" >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="kelamin"
                                                                        class="col-sm-2 col-form-label">Jenis
                                                                        kelamin</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="custom-select"
                                                                            name="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
                                                                            <option selected>Pilih jenis kelamin
                                                                            </option>
                                                                            <option >Pria</option>
                                                                            <option>Wanita</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="tlp" class="col-sm-2 col-form-label">No
                                                                        telp</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="tlp"
                                                                            placeholder="No telpon" name="tlp" value="<?= old('no_telpon'); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="email"
                                                                        class="col-sm-2 col-form-label">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" class="form-control"                    
                                                                            id="email" placeholder="email" name="email" value="<?= old('email'); ?>"
                                                                            >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="alamat"
                                                                        class="col-sm-2 col-form-label">alamat</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            id="alamat" placeholder="alamat lengkap"
                                                                            name="alamat" value="<?= old('alamat'); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="Jabatan"
                                                                        class="col-sm-2 col-form-label">Jabatan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            id="Jabatan" placeholder="Jabatan "
                                                                            name="jabatan" value="<?= old('jabatan'); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>

                                                        </form>
                                                    </div><!-- /.container-fluid -->
                                                </section>

                                            </div>
                                        </div><!-- /.card -->
                                    </div>

                                    <!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- /.content -->
                        </div>
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