<?php
session_start();
require_once '../helper/connection.php';

  $nama = htmlspecialchars($_POST['?'], ENT_QUOTES, 'UTF-8');
  $username = htmlspecialchars($_POST['?'], ENT_QUOTES, 'UTF-8');
  $password = htmlspecialchars($_POST['?'], ENT_QUOTES, 'UTF-8');
  $level = '?';

  $query = "INSERT INTO tb_user (nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')";
  if (mysqli_query($connection, $query)) {
    $_SESSION['info'] = [
      'status' => 'success',
      'message' => 'Berhasil menambah data pengembalian'
    ];
    header('Location: ./index.php');
  } else {
    $_SESSION['info'] = [
      'status' => 'failed',
      'message' => mysqli_error($connection)
    ];
    header('Location: ./index.php');
  }
?>