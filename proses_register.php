<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$ids = time();
$sql = mysqli_query($conn, "insert into user values('$ids','$username','$password','$email','$namalengkap','$alamat')");

if ($sql) {
    echo "<script> 
        alert('Pendaftaran akun berhasil');
        location.href='login.php';
        </script>";
} else {
    echo "<script> 
        alert('Pendaftaran akun tidak berhasil');
        location.href='register.php';
        </script>";
}