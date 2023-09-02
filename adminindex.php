<?php
include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

?>

<div>
    <h1> Welcome To Admin </h1>
    <br>
    <a href="logout.php">Logout</a>
    <a href="adminbarang.php">Cek Barang</a>
</div>