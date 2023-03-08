<?php
include '../modules/header.php';
include '../config/is_admin.php';
?>

<title>Surat Keluar</title>

<?php
// check page from url
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'tampil';
}
switch ($page) {
  case 'tampil':
    include 'surat-keluar/tampil.php';
    break;
  case 'tambah':
    include 'surat-keluar/tambah.php';
    break;
  case 'export':
    include 'surat-keluar/export.php';
    break;
  case 'export_filter':
    include 'surat-keluar/export_filter.php';
    break;
  case 'edit':
    include 'surat-keluar/edit.php';
    break;
  case 'proses':
    include 'surat-keluar/proses.php';
    break;
  case 'hapus':
    include 'surat-keluar/hapus.php';
    break;

  default:
    # code...
    break;
}
?>

  <?php
  include '../modules/footer.php';
  ?>