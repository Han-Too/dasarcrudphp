<?php
include 'koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}
$id = $_GET["id"];
$data = mysqli_query($koneksi, "DELETE FROM barang WHERE id = '$id'");

if ($data) {
    echo "<script>alert('Yeeey Berhasil');window.location='adminbarang.php'</script>";
} else {
    echo "<script>alert('Yaahhh Gagal');window.location='adminbarang.php'</script>";
}

?>