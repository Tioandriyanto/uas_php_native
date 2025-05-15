<?php
session_start();
require_once '../helper/connection.php';

if (isset($_GET['?']) && !empty($_GET['?'])) {
    $id_user = mysqli_real_escape_string($connection, $_GET['id_user']); // <-- fill this section
    
    $result = mysqli_query($connection, "DELETE FROM tb_user WHERE id_user ='id_user'"); // <-- fill this section
    
    // Cek apakah ada baris yang terpengaruh (data berhasil dihapus)
    if (mysqli_affected_rows($connection) > 0) {// <-- fill this section
        $_SESSION['info'] = [ // <-- fill this section
            'status' => 'success', // <-- fill this section
            'message' => 'Berhasil menghapus data' // <-- fill this section
        ];
    } else {
        $_SESSION['info'] = [ // <-- fill this section
            'status' => 'failed', // <-- fill this section
            'message' => 'Gagal menghapus data atau data tidak ditemukan' // <-- fill this section
        ];
    }
} else {
    $_SESSION['info'] = [ // <-- fill this section
        'status' => 'failed', // <-- fill this section
        'message' => 'ID user tidak valid' // <-- fill this section
    ];
}

header('Location: ./index.php');
exit();
?>