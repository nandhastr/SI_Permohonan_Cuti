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
                        <li class="breadcrumb-item active">Form cuti</li>
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

            <h2><b>Form Cuti Karyawan PT. .....</b></h2> <br>




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
                                                <h5 class="card-title">Form Cuti Pegawai</h5> <br>
                                                <!-- Main content -->
                                                <section class="content">
                                                    <div class="container-fluid">

                                                        <form action="" method="POST" enctype="multipart/form-data">

                                                            <div class="form-group">
                                                                <label for="perihal_cuti">Perihal Cuti</label>
                                                                <input type="text" class="form-control"
                                                                    id="perihal_cuti" aria-describedby="perihal_cuti"
                                                                    name="perihal_cuti" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mulai">Mulai Cuti</label>
                                                                <input type="date" class="form-control" id="mulai"
                                                                    aria-describedby="mulai" name="mulai" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="berakhir">Berakhir Cuti</label>
                                                                <input type="date" class="form-control" id="berakhir"
                                                                    aria-describedby="berakhir" name="berakhir"
                                                                    required>

                                                            </div>
                                                            <input type="text" value="" name="id_user" hidden>
                                                            <div class="form-group">
                                                                <label for="alasan">Alasan</label>
                                                                <textarea class="form-control" id="alasan" rows="3"
                                                                    name="alasan" required></textarea>
                                                            </div>

                                                            <button type="submit" class="btn btn-success" >Submit</button>
                                                            <a href="/" class="btn btn-primary">Cancel</a>
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