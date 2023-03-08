<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Bidang/Seksi </h1>

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
        <form action="divisi.php?page=proses" method="post">

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nama Bidang/Seksi</label>
                <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" required placeholder="Masukkan Nama Bidang/Seksi ...">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Jabatan Atasan</label>
                <select class="form-control select2" name="jabatan_atasan">
                  <option value="">Pilih</option>
                  <option value="Kepala Dinas">Kepala Dinas</option>
                  <option value="Sekretaris">Sekretaris</option>
                  <option value="Kepala Bidang">Kepala Bidang</option>
                  <option value="Kepala Seksi">Kepala Seksi</option>
                  <option value="Kepala Sub Bagian">Kepala Sub Bagian</option>
                </select>
              </div>
            </div>
          </div>

    

          <button name="tambah" value="tambah" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- /.container-fluid -->