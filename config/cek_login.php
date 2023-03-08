<?php
session_start();
if ($_SESSION['login']) {
  // header("Location: ../admin/dashboard.php");
  if ($_SESSION['status'] == 'admin') {
    header("Location: ../admin/dashboard.php");
    exit();
  } elseif ($_SESSION['status'] == 'tamu') {
    header("Location: ../tamu/dashboard.php");
    exit();
  } else {
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = 'Username / Password tidak cocok!';
    //refresh page
    header("Location: ../login.php");
    exit();
  }
} else {
  header("Location: ../login.php");
  exit();
}
