<?php
include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
}
$tabel =  mysqli_query($koneksi,"select * from barang");


?>

<div>
    <h1> Welcome To User </h1>
    <br>
    <table border=1>
    <thead>
        <tr>
            <td>nama</td>
            <td>harga</td>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($tabel as $data){
        ?>
        <tr>
            <td><?=$data["nama_barang"] ?></td>
            <td><?=$data["harga"] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    <br>
    <a href="logout.php">Logout</a>
</div>