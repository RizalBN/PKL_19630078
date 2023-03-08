<?php
include '../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$nama_tamu = $_POST['nama_tamu'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$keperluan = $_POST['keperluan'];
$asal_instansi = $_POST['asal_instansi'];
$waktu = $_POST['waktu'];
$alamat = $_POST['alamat'];
$id_divisi = $_POST['id_divisi'];
$nomor_telepon = $_POST['nomor_telepon'];
$id_pegawai = $_POST['id_pegawai'];

if (isset($_POST['tambah'])) {
  $query = "INSERT INTO `tb_tamu` (`id_tamu`, `id_divisi`, `id_pegawai`, `nama_tamu`, `nomor_telepon`, `jenis_kelamin`, `asal_instansi`, `alamat`, `keperluan`, `tanggal`, `waktu` ) VALUES (NULL, '$id_divisi', '$id_pegawai','$nama_tamu', '$nomor_telepon', '$jenis_kelamin', '$asal_instansi', '$alamat', '$keperluan', '$tanggal', '$waktu' );";

  // get last inserted id
  $last_id = mysqli_insert_id($koneksi); 

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // make a success message with session
    $_SESSION['result'] = 'success';
    $_SESSION['message'] = 'Data berhasil ditambahkan';

    header("Location: tamu.php");
  } else {
    // make a success message with session
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = mysqli_error($koneksi);
    //refresh page
    header("Location: tamu.php?page=tambah");
  }
}

// make if block for update
if (isset($_POST['update'])) {
  $id_tamu = $_POST['id_tamu'];

  $query = "UPDATE tb_tamu SET id_divisi = '$id_divisi', id_pegawai = '$id_pegawai', nama_tamu = '$nama_tamu', nomor_telepon = '$nomor_telepon', jenis_kelamin = '$jenis_kelamin', asal_instansi = '$asal_instansi', alamat = '$alamat', keperluan = '$keperluan', tanggal = '$tanggal', waktu = '$waktu' WHERE id_tamu = '$id_tamu'";

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // make a success message with session
    $_SESSION['result'] = 'success';
    $_SESSION['message'] = 'Data berhasil diperbarui';

    header("Location: tamu.php");
  } else {
    // make a success message with session
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = mysqli_error($koneksi);
    //refresh page
    header("Location: tamu.php?page=tambah");
  }
}
