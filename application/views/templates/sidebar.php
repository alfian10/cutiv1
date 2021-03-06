<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Akakom<sup> E-Cuti</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Formulir Pengajuan Cuti
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('formulir/formulir_mahasiswa') ?>">
          <i class="fas fa-user-graduate"></i>
          <span>Formulir Mahasiswa</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('formulir/formulir_dosen') ?>">
          <i class="fas fa-user-tie"></i>
          <span>Formulir Dosen</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('formulir/sk') ?>">
          <i class="fas fa-user-tie"></i>
          <span>Formulir SK & Tugas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_masuk_dosen') ?>">
          <i class="fas fa-tasks"></i>
          <span>Data Masuk Dosen</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_masuk_mhs') ?>">
          <i class="fas fa-tasks"></i>
          <span>Data Masuk Mahasiswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_masuk_sk') ?>">
          <i class="fas fa-tasks"></i>
          <span>Data Masuk SK</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

                <ul class="nav navbar-nav navbar-right">
                <?php if($this->session->userdata('username')) { ?>
                    <li><div>Selamat Datang,<br><?php echo $this->session->userdata('username') ?></div></li>
                    <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                <?php } else { ?>
                    <li><?php echo anchor('auth/login','Login'); ?></li>
                <?php } ?>             
                </ul>

          </ul>

        </nav>
        <!-- End of Topbar -->