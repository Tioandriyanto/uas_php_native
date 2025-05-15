<?php
session_start();
require_once '../helper/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_user = mysqli_real_escape_string($connection, $_POST['id_user']);
  $nama = mysqli_real_escape_string($connection, $_POST['nama']);
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  
  // Update query tanpa field level karena level readonly
  $query = "UPDATE tb_user SET 
    nama = '$nama', 
    username = '$username', 
    password = '$password'
    WHERE id_user = '$id_user'";

  // Eksekusi query
  if (mysqli_query($connection, $query)) {
    $_SESSION['info'] = [
      'status' => 'success',
      'message' => 'Berhasil mengubah data'
    ];
  } else {
    $_SESSION['info'] = [
      'status' => 'failed',
      'message' => mysqli_error($connection)
    ];
  }

  // Redirect kembali ke halaman index
  header('Location: ./index.php');
  exit();
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
  exit();
}
?>
