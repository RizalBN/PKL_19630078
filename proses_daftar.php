<?php
include 'config/koneksi.php';

$status = $_POST['status'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if (isset($_POST['tambah'])) {

  $query = "INSERT INTO tb_user (`username`, `password`, `status`) VALUES ('$username', '$password', '$status')";

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // make a success message with session
    session_start();
    $_SESSION['result'] = 'success';
    $_SESSION['message'] = 'Data berhasil ditambahkan';

    header("Location: daftar.php");
  } else {
    // make a success message with session
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = mysqli_error($koneksi);
    //refresh page
    header("Location: daftar.php");
  }
}
