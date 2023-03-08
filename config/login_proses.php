<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
// echo $row;
// echo 'bawah';
// die;
if ($row >= 0) {
  // echo 'atas';
  // die;
  session_start();
  $_SESSION['login'] = true;
  $_SESSION['username'] = $username;
  $_SESSION['status'] = $row['status'];
  $_SESSION['password'] = $row['password']; 
  header("Location: cek_login.php");
  exit();
} else {
  // echo 'bawah';
  // die;
  // echo '<script>alert("Username atau Password Salah!");</script>';
  // echo '<script>window.location.href = "../login.php";</script>';

  // make a success message with session
  session_start();
  $_SESSION['result'] = 'error';
  $_SESSION['message'] = 'Username / Password tidak cocok!';
  //refresh page
  header("Location: ../login.php");
}
