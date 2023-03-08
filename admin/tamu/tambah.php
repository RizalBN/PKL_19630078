<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Tamu </h1>

  <div class="card card-body">
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
      <div class="col-12">
        <form action="tamu.php?page=proses" method="post">

        <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Bidang/Seksi Tujuan</label>
                <select name="id_divisi" class="form-control select2">
                  <option value="">Pilih</option>
                  <?php
                  include_once '../config/koneksi.php';
                  $queryDivisi = "SELECT * FROM tb_divisi ORDER BY id_divisi DESC";
                  $resultDivisi = mysqli_query($koneksi, $queryDivisi);
                  while ($Divisi = mysqli_fetch_assoc($resultDivisi)) {
                    ?>
                    <option value="<?= $Divisi['id_divisi']; ?>"><?= $Divisi['nama_divisi']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Pegawai Tujuan</label>
                <select name="id_pegawai" class="form-control select2">
                  <option value="">Pilih</option>
                  <?php
                  include_once '../config/koneksi.php';
                  $queryPegawai = "SELECT * FROM tb_pegawai ORDER BY id_pegawai DESC";
                  $resultPegawai = mysqli_query($koneksi, $queryPegawai);
                  while ($Pegawai = mysqli_fetch_assoc($resultPegawai)) {
                    ?>
                    <option value="<?= $Pegawai['id_pegawai']; ?>"><?= $Pegawai['nama_pegawai']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="col-6">
              <div class="form-group">
                <label>Nama Tamu</label>
                <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" required placeholder="Masukkan Nama Tamu ...">
              </div>
            </div>
                    
            <div class="col-6">
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin">
                  <option value="">Pilih</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
        </div>

          <div class="row">
          <div class="col-6">
              <div class="form-group">
                <label>Asal Instansi</label>
                <input type="text" class="form-control" id="asal_instansi" name="asal_instansi" required placeholder="Masukkan Asal Instansi ...">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required placeholder="Masukkan Tanggal ...">
              </div>
            </div>
          </div>

        <div class="row">
          <div class="col-6">
              <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required placeholder="Masukkan Nomor Telepon ...">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="time" class="form-control" id="waktu" name="waktu" required placeholder="Masukkan Tanggal Lahir">
              </div>
            </div>
        </div>

          <div class="form-group">
            <label for="keperluan">Keperluan</label>
            <textarea class="form-control" id="keperluan" name="keperluan" rows="4"></textarea>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="4"></textarea>
          </div>

          <button name="tambah" value="tambah" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->