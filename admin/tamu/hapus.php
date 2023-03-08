<?php
include '../config/koneksi.php';
$id_tamu = $_GET['id_tamu'];
// make deleete query
$query = "DELETE FROM tb_tamu WHERE id_tamu = '$id_tamu'";

$result = mysqli_query($koneksi, $query);
if ($result) {
  // make a success message with session
  $_SESSION['result'] = 'success';
  $_SESSION['message'] = 'Data berhasil dihapus';

  header("Location: tamu.php");
} else {
  // make a success message with session
  $_SESSION['result'] = 'error';
  $_SESSION['message'] = mysqli_error($koneksi);
  //refresh page
  header("Location: tamu.php");
}
