<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>

  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('username') ?></a>
        </div>
      </div>

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
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                PPOB
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('dashboard')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
                            <li class="nav-item">
                <a href="<?php echo base_url('dashboard/isi_pulsa')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pulsa</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url('token_pln')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Token PLN</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url('game')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Game</p>
                </a>
              </li>


            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Master Data<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
               <li class="nav-item">
                <a href="<?php echo base_url('dashboard/harga')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Pulsa,PLN,Game</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="<?php echo base_url('transaksi')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi</p>
                </a>
              </li>

             <li class="nav-item">
                <a href="<?php echo base_url('pulsa/data_pulsa')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kode Pulsa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Tiket Pesawat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('tiket')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rute Penerbangan</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url('tiket/cari_penerbangan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cari Penerbangan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url('tiket/ambil_tiket')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ambil E-TIKET</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Tiket Kereta Api
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
               <li class="nav-item">
                <a href="<?php echo base_url('kereta_api')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Kode Stasiun</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="<?php echo base_url('kereta_api/rute_kereta_api')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Rute Kereta Api</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url('kereta_api/jadwal_kereta')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Kereta Api</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Pelni
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
               <li class="nav-item">
                <a href="<?php echo base_url('pelni')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kode Pelabuhan</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url('pelni/jadwal_pelni')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Pelni</p>
                </a>
              </li>
            </ul>
      </li>

          <li class="nav-item menu-open">
          
            <ul class="nav nav-treeview">
             

              <li class="nav-item">
                <a href="<?php echo base_url('bantuan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bantuan</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url('tiket/reset_password')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reset Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('login/logout/')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>

            </ul>
          </li>
         
      

        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar --></aside>
