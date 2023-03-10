<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Surat Keluar </h1>

  <div class="card card-body">
    <div class="row">
      <div class="col-12 d-flex justify-content-between">
        <div class="left " >
          <form method="post" action="surat-keluar.php?page=export_filter">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                 <label>Dari Tanggal</label>
                 <input type="date" name="dari" id="" class="form-control">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                 <label>Sampai Tanggal</label>
                 <input type="date" name="sampai" id="" class="form-control">
                </div>
              </div>
                <div class="col-4">
                  <div class="from-group">
                    <button type="submit" class="btn btn-primary ml-2">Filter Surat</button>
                  </div>
              </div>
            </div>
          </form>


        </div>
        <div class="right">
          <a href="surat-keluar.php?page=tambah" class="btn btn-primary">Tambah Data</a>
          <a href="surat-keluar.php?page=export" class="btn btn-primary" target="_blank">Print Data</a>
        </div>

      </div>
    </div>
  </div>

  <div class="card card-body mt-2">
    <div class="row">
      <div class="col-12">
        <?php
        if (isset($_SESSION['result'])) {
          if ($_SESSION['result'] == 'success') {
        ?>
            <!-- Success -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?= $_SESSION['message'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Success -->
          <?php
          } else {
          ?>
            <!-- danger -->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><?= $_SESSION['message'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- danger -->
        <?php
          }
          unset($_SESSION['result']);
          unset($_SESSION['message']);
        }
        ?>

      </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="mytable2" style="width: 100%;">
          <thead>
            <tr>
              <th>Nomor Agenda</th>
              <th>Nomor Surat</th>
              <th>Tanggal Surat</th>
              <th>Perihal</th>
              <th>Tujuan</th>
              <th style="width: 150px;" class="not-export-col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once '../config/koneksi.php';
            $no = 1;
            $query = "SELECT * FROM tb_surat_keluar ORDER BY id_surat DESC";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['no_surat']; ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal'])); ?></td>
                <td><?= $row['perihal']; ?></td>
                <td><?= $row['tujuan']; ?></td>
                <td class="not-export-col">
                  <a href="surat-keluar.php?page=edit&id_surat=<?= $row['id_surat']; ?>" class="btn btn-warning">Edit</a>
                  <a href="surat-keluar.php?page=hapus&id_surat=<?= $row['id_surat']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data')">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->