<?php
session_start();
require_once '../helper/connection.php';

$id = $_GET['?'] ?? null;

if (!$id) {
    $_SESSION['info'] = [
        'status' => '?',
        'message' => '?'
    ];
    header('Location: ./index.php');
    exit;
}

$result = mysqli_query($connection, "DELETE FROM ? WHERE id='$?'");

if (mysqli_affected_rows($connection) > 0) {
    $_SESSION['info'] = [
        'status' => '?',
        'message' => '?'
    ];
} else {
    $_SESSION['info'] = [
        'status' => '?',
        'message' => '?: ' . mysqli_error($connection)
    ];
}

header('Location: ./index.php');
exit;
?>
