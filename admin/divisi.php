<?php
include '../modules/header.php';
include '../config/is_admin.php';
?>

<title>Bidang/Seksi</title>

<?php
// check page from url
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'tampil';
}
switch ($page) {
  case 'tampil':
    include 'divisi/tampil.php';
    break;
  case 'tambah':
    include 'divisi/tambah.php';
    break;
  case 'export':
    include 'divisi/export.php';
    break;
  case 'edit':
    include 'divisi/edit.php';
    break;
  case 'proses':
    include 'divisi/proses.php';
    break;
  case 'hapus':
    include 'divisi/hapus.php';
    break;

  default:
    # code...
    break;
}
?>

  <?php
  include '../modules/footer.php';
  ?>