<?php
include "../navbar/koneksi.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

$cek = mysqli_num_rows($sql);

if ($cek == 1) {
    $data = mysqli_fetch_array($sql);
    if ($password == $data['password']) {
        $_SESSION['username'] = $data['username'];
        header("location:../lobi/lobi.php");
    } else {
        $_SESSION['error'] = "Password Yang Anda Masukkan Salah";
        header("location:index.php");
    }
} else {
    $_SESSION['error'] = "Username Tidak Terdaftar";
    header("location:index.php");
}
?>