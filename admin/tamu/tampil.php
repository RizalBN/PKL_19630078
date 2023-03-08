<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tamu </h1>

  <div class="card card-body">
    <div class="row">
      <div class="col-12 d-flex justify-content-between">
        <div class="left " >
          <form method="post" action="tamu.php?page=export_filter">
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
          <a href="tamu.php?page=tambah" class="btn btn-primary">Tambah Data</a>
          <a href="tamu.php?page=export" class="btn btn-primary" target="_blank">Print Data</a>
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
              <th>No</th>
              <th>Nama Bidang/Seksi</th>
              <th>Nama Pegawai Tujuan</th>
              <th>Nama Tamu</th>
              <th>Asal Instansi</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Telepon</th>
              <th>Alamat</th>
              <th>Keperluan</th>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th style="width: 150px;" class="not-export-col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once '../config/koneksi.php';
            $no = 1;
            $query = "SELECT * FROM tb_tamu
            JOIN tb_divisi ON  tb_divisi.id_divisi = tb_tamu.id_divisi
            JOIN tb_pegawai ON  tb_pegawai.id_pegawai = tb_tamu.id_pegawai
            ORDER BY id_tamu DESC";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_divisi']; ?></td>
                <td><?= $row['nama_pegawai']; ?></td>
                <td><?= $row['nama_tamu']; ?></td>
                <td><?= $row['asal_instansi']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['nomor_telepon']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['keperluan']; ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal'])); ?></td>
                <td><?= $row['waktu']; ?></td>
                <td class="not-export-col">
                  <a href="tamu.php?page=edit&id_tamu=<?= $row['id_tamu']; ?>" class="btn btn-warning">Edit</a>
                  <a href="tamu.php?page=hapus&id_tamu=<?= $row['id_tamu']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data')">Hapus</a>
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