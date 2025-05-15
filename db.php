<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sekolah_db";// <-- fill this section

$conn = mysqli_connect($host, $user, $pass, $db); // <-- fill this section

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
