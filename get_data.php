<?php
header("Content-Type: application/json");
include "db.php";

$base_url = "http://localhost/web_gis_sekolah/"; // <-- fill this section

$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10; // <-- fill this section
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT id, nama_sekolah, telepon, latitude, longitude, foto FROM sekolah"; // <-- fill this section
$result = mysqli_query($conn, $sql);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    if (!empty($row['foto'])) {
        if (strpos($row['foto'], 'uploads/') === 0) {
            $row['foto'] = $base_url . $row['foto'];
        } else {
            $row['foto'] = $base_url . "uploads/" . $row['foto'];
        }
    } else {
        $row['foto'] = null;
    }
    $data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT);
mysqli_close($conn);
?>
