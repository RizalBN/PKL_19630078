<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Pegawai </h1>

  <div class="card card-body">
    <div class="row">
      <div class="col-12 d-flex justify-content-between">
        <a href="pegawai.php?page=tambah" class="btn btn-primary">Tambah Data</a>
        <a href="pegawai.php?page=export" class="btn btn-primary" target="_blank">Print Data</a>
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
              <th>NIP</th>
              <th>Nama</th>
              <th>Bidang</th>
              <th>Jabatan</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Nomor Telepon</th>
              <th>Alamat</th>
              <th style="width: 150px;" class="not-export-col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once '../config/koneksi.php';
            $no = 1;
            $query = "SELECT * FROM tb_pegawai
            JOIN tb_divisi ON  tb_divisi.id_divisi = tb_pegawai.id_divisi
            ORDER BY id_pegawai DESC";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nip']; ?></td>
                <td><?= $row['nama_pegawai']; ?></td>
                <td><?= $row['nama_divisi']; ?></td>
                <td><?= $row['jabatan']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['tempat_lahir']; ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal_lahir'])); ?></td>
                <td><?= $row['nomor_telepon']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td class="not-export-col">
                  <a href="pegawai.php?page=edit&id_pegawai=<?= $row['id_pegawai']; ?>" class="btn btn-warning">Edit</a>
                  <a href="pegawai.php?page=hapus&id_pegawai=<?= $row['id_pegawai']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data')">Hapus</a>
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