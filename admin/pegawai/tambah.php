<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Pegawai </h1>

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
        <form action="pegawai.php?page=proses" method="post">

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Masukkan Nomor Induk Pegawai</label>
                <input type="text" class="form-control" id="nip" name="nip" required placeholder="Masukkan Nomor Induk Pegawai ...">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Nama Pegawai</label>
                <input type="text" class="form-control" name="nama_pegawai" required placeholder="Masukkan Nama Pegawai ...">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Bidang/Seksi</label>
                <select class="form-control select2" id="id_divisi" name="id_divisi">
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
                <label>Jabatan</label>
                <input type="text" class="form-control" name="jabatan" required placeholder="Masukkan Jabatan ...">
              </div>
            </div>
          </div>

          <div class="row">
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
            <div class="col-6">
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir ...">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required placeholder="Tanggal Lahir">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required placeholder="Masukkan Nomor Telepon ...">
              </div>
            </div>
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