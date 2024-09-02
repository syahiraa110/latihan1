<?php
session_start();
include "koneksi.php";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


echo "$email $password";
$sql = "SELECT * FROM tlogin where email ='$email' and pass= 'pass'";
$hasil = $conn->query($sql);
$result = $conn->query($sql);
$jumlah = $hasil->num_rows;
if($jumlah==1){
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;
    echo"login berhasil";
    header("Refresh:3; url=index.php");
}
else{
    echo"Login gagal";
    header("Refresh:3; url=login.php");
}

?>