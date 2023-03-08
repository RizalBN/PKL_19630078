<title>Edit Bidang/Seksi</title>

<?php
 include '../config/koneksi.php';
 // get id from url
 if (!isset($_GET['id_divisi'])) {
   header("Location: divisi.php");
 } else {
   $id_divisi = $_GET['id_divisi'];
   // get data from database
   $query = "SELECT * FROM tb_divisi 
   WHERE tb_divisi.id_divisi = '$id_divisi'";
   $result = mysqli_query($koneksi, $query);
   $row = mysqli_fetch_assoc($result);
 }

 ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Bidang/Seksi</h1>

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
          <input type="hidden" name="id_divisi" value="<?= $id_divisi ?>">

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nama Bidang/Seksi</label>
                <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" required placeholder="Nama Bidang/Seksi" value="<?= $row['nama_divisi'] ?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Jabatan Atasan</label>
                <select class="form-control select2" name="jabatan_atasan">
                  <option value="">Pilih</option>
                  <option value="Kepala Dinas" <?= $row['jabatan_atasan'] == 'Kepala Dinas' ? 'selected' : '' ?>>Kepala Dinas</option>
                  <option value="Sekretaris" <?= $row['jabatan_atasan'] == 'Sekretaris' ? 'selected' : '' ?>>Sekretaris</option>
                  <option value="Kepala Bidang" <?= $row['jabatan_atasan'] == 'Kepala Bidang' ? 'selected' : '' ?>>Kepala Bidang</option>
                  <option value="Kepala Seksi" <?= $row['jabatan_atasan'] == 'Kepala Seksi' ? 'selected' : '' ?>>Kepala Seksi</option>
                  <option value="Kepala Sub Bagian" <?= $row['jabatan_atasan'] == 'Kepala Sub Bagian' ? 'selected' : '' ?>>Kepala Sub Bagian</option>
                </select>
              </div>
            </div>
          </div>

          <button name="update" value="update" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->