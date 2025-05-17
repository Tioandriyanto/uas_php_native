<?php
header("Content-Type: application/json");
include "db.php";

$base_url = "http://localhost/web_gis_sekolah/"; // <-- fill this section

$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10; // <-- fill this section
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT id_menu, nama_menu, harga, kategori, deskripsi, gambar FROM menu"; // <-- updated query
$result = mysqli_query($conn, $sql);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    if (!empty($row['gambar'])) {
        if (strpos($row['gambar'], 'uploads/') === 0) {
            $row['gambar'] = $base_url . $row['gambar'];
        } else {
            $row['gambar'] = $base_url . "uploads/" . $row['gambar'];
        }
    } else {
        $row['gambar'] = null;
    }
    $data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT);
mysqli_close($conn);
?>
