<?php
$dbhost = "localhost"; // <-- fill this section
$dbusername = "root"; // <-- fill this section
$dbpassword = ""; // <-- fill this section
$dbname = "sekolah_db"; // <-- fill this section

$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
