<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Pembayaran SPP SMK-ASSY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?= ucfirst($this->uri->segment('1')); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="menu-open nav-item ">
          <?php if($this->session->userdata("role") == 2) :   ?>
            <a href="<?= base_url('administrator') ?>" class="nav-link">
            <?php elseif($this->session->userdata("role") == 1) : ?>
              <a href="<?= base_url('petugas') ?>" class="nav-link">
              <?php else : ?>
                <a href="<?= base_url('siswa') ?>" class="nav-link">
            <?php endif; ?>
                <i class="fas fa-tachometer-alt nav-icon"></i>
                <p>Dashboard</p>
            </a>
          </li>
          <?php if($this->session->userdata('role') == 2) : ?>
          <!-- MENU ADMIN -->
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('administrator/siswa'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('administrator/petugas'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Petugas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('administrator/spp'); ?>" class="nav-link">
                <i class="fas fa-dollar-sign nav-icon"></i>
                <p>Data SPP</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('administrator/konfirmasi'); ?>" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Konfirmasi
                <?php if($konfirmasi == !NULL) : ?>
                <span class="right badge badge-danger"><?= count($konfirmasi); ?></span>
                <?php else: ?>
                <span class="right badge badge-danger"> 0 </span>
                <?php endif; ?>
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('administrator/riwayatPembayaran') ?>" class="nav-link">
                <i class="fas fa-print nav-icon"></i>
                <p>Riwayat Pembayaran</p>
            </a>
          </li>
          <?php elseif($this->session->userdata('role') == 1) : ?>
          <!-- MENU PETUGAS -->
            <li class="nav-item">
            <a href="<?= base_url('petugas/konfirmasi'); ?>" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Konfirmasi
                <?php if($konfirmasi == !NULL) : ?>
                <span class="right badge badge-danger"><?= count($konfirmasi); ?></span>
                <?php else: ?>
                <span class="right badge badge-danger"> 0 </span>
                <?php endif; ?>
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('petugas/riwayatPembayaran') ?>" class="nav-link">
                <i class="fas fa-print nav-icon"></i>
                <p>Laporan</p>
            </a>
          </li>
          <?php else : ?>
          <!-- MENU SISWA -->
            <li class="nav-item">
            <a href="<?= base_url('siswa/tagihan'); ?>" class="nav-link">
                <i class="fas fa-money-bill nav-icon"></i>
                <p>Tagihan</p>
            </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('siswa/riwayatPembayaran') ?>" class="nav-link">
                  <i class="fas fa-history nav-icon"></i>
                  <p>History Pembayaran</p>
              </a>
            </li>
          <?php endif; ?>
          
          <li class="nav-item">
            <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= ucfirst($this->uri->segment('2')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <?php if($this->session->userdata("role") == 2) :   ?>
                <a href="<?= base_url('administrator'); ?>">Dashboard</a>
            <?php elseif($this->session->userdata("role") == 1) : ?>
              <a href="<?= base_url('petugas'); ?>">Dashboard</a>
              <?php else : ?>
                <a href="<?= base_url('siswa'); ?>">Dashboard</a>
            <?php endif; ?>
              </li>
              <li class="breadcrumb-item active"><?= ucfirst($this->uri->segment('2')); ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
