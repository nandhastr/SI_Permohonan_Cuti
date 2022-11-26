<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/avatar5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>Dashboard</b> |  <?= $judul ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->


    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
          -->
        <a href="/" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>



        <li class="nav-item">
          <a href="../Data_karyawan" class="nav-link">
          <i class="fas fa-user-alt"></i>
            <p>
              Data Karyawan
              <span class="badge badge-info right"></span>
            </p>
          </a>

        <li class="nav-item">
          <a href="../Form_cuti" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Permohonan cuti
              <span class="badge badge-info right"></span>
            </p>
          </a>
        <li class="nav-item">
          <a href="<?php echo base_url('') ?>" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Registrasi
              <span class="badge badge-info right"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Ganti password
              <span class="badge badge-info right"></span>
            </p>
          </a>
        </li>
          <li class="nav-item">
            <a href="../Laporan" class="nav-link">
            <i class="fal fa-book"></i>

              <p>
                Laporan
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Logout
              <span class="badge badge-info right"></span>
            </p>
          </a>
        </li>

    </nav>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>


</aside>