<?php
include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
} 
    $harga = $_POST["harga"];
    $nama = $_POST["nama"];
    $tabel =  mysqli_query($koneksi,"INSERT INTO barang VALUES('','$harga','$nama')");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='adminbarang.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='adminbarang.php'</script>";
    }
?>