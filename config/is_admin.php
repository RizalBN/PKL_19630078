<?php
if ($_SESSION['status'] != 'admin') {
  header("Location: ../login.php");
  exit();
}
