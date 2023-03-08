<?php
include '../config/koneksi.php';
$id_divisi = $_GET['id_divisi'];
// make deleete query
$query = "DELETE FROM tb_divisi WHERE id_divisi = '$id_divisi'";

$result = mysqli_query($koneksi, $query);
if ($result) {
  // make a success message with session
  $_SESSION['result'] = 'success';
  $_SESSION['message'] = 'Data berhasil dihapus';

  header("Location: divisi.php");
} else {
  // make a success message with session
  $_SESSION['result'] = 'error';
  $_SESSION['message'] = mysqli_error($koneksi);
  //refresh page
  header("Location: divisi.php");
}
