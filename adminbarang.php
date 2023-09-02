<?php
include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
} 
    $tabel =  mysqli_query($koneksi,"select * from barang");


?>
<h1>TABEL BARANG</h1>
<a href="tambahbarang.php">Tambah</a>
<br>
<table border=1>
    <thead>
        <tr>
            <td>nama</td>
            <td>harga</td>
            <td>aksi</td>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($tabel as $data){
        ?>
        <tr>
            <td><?=$data["nama_barang"] ?></td>
            <td><?=$data["harga"] ?></td>
            <td>
                <a href="hapusbarang.php?id=<?=$data["id"]?>">hapus</a>
                <a href="editbarang.php?id=<?=$data["id"]?>">ubah</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<a href="adminindex.php">kembali</a>