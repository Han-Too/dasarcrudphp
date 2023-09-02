<?php
include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
} 
?>
    <h1>TAMBAH BARANG</h1>
    <form action="prosestambah.php" method="post">
        <label for="nama">Nama</label>
        <input id="nama" type="text"  name="nama">
        <br>
        <label for="harga">Harga</label>
        <input id="harga" type="text" name="harga">
        <br><br>
        <button  type="submit">Tambah</button>
    </form>


