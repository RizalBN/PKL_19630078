<?php
include '../modules/header.php';
include '../config/is_tamu.php';
?>

<title>Tamu</title>

<?php
// check page from url
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'tampil';
}
switch ($page) {
  case 'tampil':
    include 'tamu/tampil.php';
    break;
  case 'tambah':
    include 'tamu/tambah.php';
    break;
  case 'export':
    include 'tamu/export.php';
    break;
  case 'edit':
    include 'tamu/edit.php';
    break;
  case 'proses':
    include 'tamu/proses.php';
    break;
  case 'hapus':
    include 'tamu/hapus.php';
    break;

  default:
    # code...
    break;
}
?>

  <?php
  include '../modules/footer.php';
  ?>