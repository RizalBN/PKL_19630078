<?php
if ($_SESSION['status'] != 'tamu') {
  header("Location: ../login.php");
  exit();
}
include_once 'koneksi.php';
// $id_user = $_SESSION['id_user'];
// $qGetIdGuru = "SELECT id_guru, id_mapel FROM tb_guru WHERE id_user = '$id_user'";
// $resultGetIdGuru = mysqli_query($koneksi, $qGetIdGuru);
// $guru = mysqli_fetch_assoc($resultGetIdGuru);
// $id_guru = $guru['id_guru'];
// $id_mapel = $guru['id_mapel'];
