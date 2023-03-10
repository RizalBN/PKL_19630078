 <title>Surat Masuk</title>

 <?php
  include '../config/koneksi.php';
  // get id from url
  if (!isset($_GET['id_agenda'])) {
    header("Location: surat-masuk.php");
  } else {
    $id_agenda = $_GET['id_agenda'];
    // get data from database
    $query = "SELECT * FROM tb_surat_masuk WHERE id_agenda = '$id_agenda'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
  }

  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Surat Masuk</h1>

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
         <form action="surat-masuk.php?page=proses" method="post">
           <input type="hidden" name="id_agenda" value="<?= $id_agenda ?>">

           <div class="row">
            <div class="col-6">
              <div class="form-group">
              <label>Asal Surat</label>
                 <input type="text" class="form-control" name="asal_surat" required placeholder="Asal Surat" value="<?= $row['asal_surat'] ?>">
               </div>
             </div>
             <div class="col-6">
               <div class="form-group">
                 <label>No Surat</label>
                 <input type="text" class="form-control" name="no_surat" required placeholder="No Surat" value="<?= $row['no_surat'] ?>">
               </div>
             </div>
             <div class="col-6">
               <div class="form-group">
                 <label>Tanggal Surat</label>
                 <input type="date" class="form-control" name="tanggal_surat" required placeholder="Tanggal Surat" value="<?= $row['tanggal_surat'] ?>">
               </div>
             </div>

             <div class="col-6">
               <div class="form-group">
                 <label>Tanggal Surat Diterima</label>
                 <input type="date" class="form-control" name="tanggal_surat_diterima" required placeholder="Tanggal Surat Diterima" value="<?= $row['tanggal_surat_diterima'] ?>">
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label>Bidang Tujuan Disposisi</label>
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
                 <label>Disposisi</label>
                 <textarea class="form-control" id="disposisi" name="disposisi" rows="4"></textarea>
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