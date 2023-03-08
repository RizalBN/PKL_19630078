<?php
include '../config/koneksi.php';

$id_divisi = $_POST['id_divisi'];
$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama_pegawai'];
$jabatan = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];


if (isset($_POST['tambah'])) {
  $query = "INSERT INTO `tb_pegawai` (`id_pegawai`, `id_divisi`, `nip`, `nama_pegawai`, `jabatan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nomor_telepon`, `alamat`) VALUES (NULL, '$id_divisi', '$nip', '$nama_pegawai', '$jabatan', '$jenis_kelamin','$tempat_lahir', '$tanggal_lahir', '$nomor_telepon', '$alamat');";

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // make a success message with session
    $_SESSION['result'] = 'success';
    $_SESSION['message'] = 'Data berhasil ditambahkan';

    header("Location: pegawai.php");
  } else {
    // make a success message with session
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = mysqli_error($koneksi);
    //refresh page
    header("Location: pegawai.php?page=tambah");
  }
}

// make if block for update
if (isset($_POST['update'])) {
  $id_pegawai = $_POST['id_pegawai'];

  $query = "UPDATE tb_pegawai SET id_divisi = '$id_divisi', nip = '$nip', nama_pegawai = '$nama_pegawai', jabatan = '$jabatan', jenis_kelamin = '$jenis_kelamin', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', nomor_telepon = '$nomor_telepon', alamat = '$alamat' WHERE id_pegawai = '$id_pegawai'";

  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // make a success message with session
    $_SESSION['result'] = 'success';
    $_SESSION['message'] = 'Data berhasil diperbarui';

    header("Location: pegawai.php");
  } else {
    // make a success message with session
    $_SESSION['result'] = 'error';
    $_SESSION['message'] = mysqli_error($koneksi);
    //refresh page
    header("Location: pegawai.php?page=tambah");
  }
}
