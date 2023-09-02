<?php
include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
} 
    $id = $_GET["id"];
    $tabel =  mysqli_query($koneksi,"select * from barang where id = '$id'");
    foreach($tabel as $d){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UBAH BARANG</h1>
    <form action="prosesedit.php" method="post">
        <label for="nama">Nama</label>
        <input id="nama" type="text" value="<?=$d["nama_barang"]?>" name="nama">
        <input id="id" type="hidden" value="<?=$d["id"]?>" name="id">
        <br>
        <label for="harga">Harga</label>
        <input id="harga" type="text" value="<?=$d["harga"]?>" name="harga">
        <br><br>
        <button  type="submit">Ubah</button>
    </form>
</body>
</html>

<?php } ?>


