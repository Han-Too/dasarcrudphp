<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login); //INI BUAT CEK APA ADA DATA APA KAGA TAPI LGSG MASUK HITUNG
$role = mysqli_fetch_array($login); // BUAT DAPETIN DATA YANG BAKAL DI CEK ROLENYA
if ($cek > 0) {
    if($role["role"] == "1"){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        // echo "<script>alert('Berhasil Login');window.location='adminindex.php'</script>";
        header("location:adminindex.php");
    } elseif ($role["role"] == "0") {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        // echo "<script>alert('Berhasil Login');window.location='userindex.php'</script>";
        header("location:userindex.php");
    }
} else {
    //KALO MAKE ALERT PAKE INI
    echo "<script>alert('Gagal Login');window.location='index.php'</script>";
    
    //KALO LANGSUNG MAKE INI
    // header("location:index.php");
}

?>