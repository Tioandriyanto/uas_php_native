<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "dbmarview"; // <-- updated database name

$conn = mysqli_connect($host, $user, $pass, $db); // <-- fill this section

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
