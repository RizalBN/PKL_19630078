<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center" href="../config/cek_login.php" style="height: 120px;">
    <img src="../assets/img/logo.png" alt="" width="170px">

    <div class="sidebar-brand-text mx-3">
      <?= ucfirst($_SESSION['status']) ?>
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="../config/cek_login.php">
      <i class="fa fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <?php
  if ($_SESSION['status'] == 'admin') {
    ?>

    <!-- Heading -->
    <div class="sidebar-heading">
    BUKU SURAT MENYURAT
    </div>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa fa-envelope"></i>
        <span> Surat Menyurat</span>
      </a>
      <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="surat-masuk.php">Surat Masuk</a>
          <a class="collapse-item" href="surat-keluar.php">Surat Keluar</a>
        </div>
      </div>
    </li>

      <!-- Divider -->
  <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Buku Tamu
    </div>

    <li class="nav-item">
      <a class="nav-link" href="tamu.php">
        <i class="fas fa-duotone fa-users"></i>
        <span>Data Tamu</span></a>
    </li>

      <!-- Divider -->
  <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Nama Bidang/Seksi
    </div>

    <li class="nav-item">
      <a class="nav-link" href="divisi.php">
        <i class="fas fa-building"></i>
        <span>Data Bidang/Seksi</span></a>
    </li>

      <!-- Divider -->
  <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Nama Pegawai
    </div>

    <li class="nav-item">
      <a class="nav-link" href="pegawai.php">
        <i class="fas fa-users"></i>
        <span>Data Pegawai</span></a>
    </li>

          <!-- Divider -->
  <hr class="sidebar-divider">

<div class="sidebar-heading">
  Pengguna
</div>

    <li class="nav-item">
      <a class="nav-link" href="pengguna.php">
        <i class="fas fa-user"></i>
        <span>Data Pengguna</span></a>
    </li>


  <?php } elseif ($_SESSION['status'] == 'tamu') {
    ?>
    <!-- Heading -->
    <div class="sidebar-heading">
      Buku Tamu
    </div>

    <li class="nav-item">
      <a class="nav-link" href="tamu.php">
        <i class="fas fa-duotone fa-users"></i>
        <span>Data Tamu</span></a>
    </li>

    <!-- Heading -->
  <?php
  } ?>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>