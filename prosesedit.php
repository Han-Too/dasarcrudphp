<?php
include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
} 
    $id = $_POST["id"];
    $harga = $_POST["harga"];
    $nama = $_POST["nama"];
    $tabel =  mysqli_query($koneksi,"UPDATE barang SET harga='$harga',nama_barang='$nama' WHERE id = '$id'");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='adminbarang.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='adminbarang.php'</script>";
    }
?>