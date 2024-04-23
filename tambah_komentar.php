<?php
include "koneksi.php";
session_start();

$fotoid = $_POST['fotoid'];
$isikomentar = $_POST['isikomentar'];
$tanggalkomentar = date("Y-m-d");
$userid = $_SESSION['userid'];
$ids = time();
$sql = mysqli_query($conn, "insert into komentarfoto values('$ids','$fotoid','$userid','$isikomentar','$tanggalkomentar')");

echo "<script>
    location.href='index.php'
    </script>";