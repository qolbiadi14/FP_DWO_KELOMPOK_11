<?php
$dbHost = "localhost";
$dbUser = "x230";
$dbPass = "x230";
$dbName = "dwadv_k11c";

$connect = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if (!$connect) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>