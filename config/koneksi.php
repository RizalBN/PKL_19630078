<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "pkl19630078";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  echo "Koneksi Gagal";
}
