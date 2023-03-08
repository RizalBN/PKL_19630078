<?php
include '../modules/header.php';
include '../config/is_admin.php';
?>

<title>Surat Masuk</title>

<?php
// check page from url
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'tampil';
}
switch ($page) {
  case 'tampil':
    include 'surat-masuk/tampil.php';
    break;
  case 'tambah':
    include 'surat-masuk/tambah.php';
    break;
  case 'export':
    include 'surat-masuk/export.php';
    break;
  case 'export_filter':
    include 'surat-masuk/export_filter.php';
    break;
  case 'edit':
    include 'surat-masuk/edit.php';
    break;
  case 'proses':
    include 'surat-masuk/proses.php';
    break;
  case 'hapus':
    include 'surat-masuk/hapus.php';
    break;

  default:
    # code...
    break;
}
?>

  <?php
  include '../modules/footer.php';
  ?>