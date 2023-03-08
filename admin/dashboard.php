<?php
include '../modules/header.php';
include '../config/is_admin.php';
include_once '../config/koneksi.php';
?>

<title>Dashboard</title>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard Admin</h1>

          <!-- Divider -->
          <hr class="sidebar-divider">

  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Total Surat Masuk</div>
              <?php
              $query = "SELECT * FROM tb_surat_masuk";
              $result = mysqli_query($koneksi, $query);
              $nilai = mysqli_num_rows($result);
              ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nilai ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-star fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Total Surat Keluar</div>
              <?php
              $query = "SELECT * FROM tb_surat_keluar";
              $result = mysqli_query($koneksi, $query);
              $nilai = mysqli_num_rows($result);
              ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nilai ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-star fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Total Data Tamu</div>
              <?php
              $query = "SELECT * FROM tb_tamu";
              $result = mysqli_query($koneksi, $query);
              $nilai = mysqli_num_rows($result);
              ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nilai ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-star fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Total Data Bidang/Seksi</div>
              <?php
              $query = "SELECT * FROM tb_divisi";
              $result = mysqli_query($koneksi, $query);
              $nilai = mysqli_num_rows($result);
              ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nilai ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-star fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Total Data Pegawai</div>
              <?php
              $query = "SELECT * FROM tb_pegawai WHERE id_pegawai = 1";
              $result = mysqli_query($koneksi, $query);
              $kas = mysqli_fetch_assoc($result);
              ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nilai ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-star fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

        <!-- Divider -->
        <hr class="sidebar-divider">

</div>
<!-- /.container-fluid -->

<?php
include '../modules/footer.php';
?>