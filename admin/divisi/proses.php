<?php
include '../config/koneksi.php';

$nama_divisi = $_POST['nama_divisi'];
$jabatan_atasan = $_POST['jabatan_atasan'];

if (isset($_POST['tambah'])) {
  $query = "INSERT INTO `tb_divisi` (`id_divisi`, `nama_divisi`, `jabatan_atasan`) VALUES (NULL, '$id_divisi' '$nama_divisi', '$jabatan_atasan');";

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // make a success message with session
    $_SESSION['result'] = 'success';
    $_SESSION['message'] = 'Data berhasil ditambahkan';

    header("Location: divisi.php");
  } else {
    // make a success message with session
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = mysqli_error($koneksi);
    //refresh page
    header("Location: divisi.php?page=tambah");
  }
}

// make if block for update
if (isset($_POST['update'])) {
  $id_divisi = $_POST['id_divisi'];

  $query = "UPDATE tb_divisi SET nama_divisi = '$nama_divisi', jabatan_atasan = '$jabatan_atasan' WHERE id_divisi = '$id_divisi'";

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // make a success message with session
    $_SESSION['result'] = 'success';
    $_SESSION['message'] = 'Data berhasil diperbarui';

    header("Location: divisi.php");
  } else {
    // make a success message with session
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = mysqli_error($koneksi);
    //refresh page
    header("Location: divisi.php?page=tambah");
  }
}
