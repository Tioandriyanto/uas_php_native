<?php
session_start();
if (isset($_POST['submit'])) {
    $input = $_POST['username'];
    $password = $_POST['password'];

    $sqlUser = "SELECT * FROM tbl_user WHERE username='$input' LIMIT 1";
    $resultUser = mysqli_query($connection, $sqlUser);
    $rowUser = mysqli_fetch_assoc($resultUser);

    if ($rowUser && $password == $rowUser['password'] && $rowUser['level'] == 'admin') {
        $_SESSION['login'] = $rowUser;
        header('Location: dashboard/index.php');
        exit;
    } else {
        header('Location: login.php?error=1');
        exit;
    }
}

if (isset($_SESSION['login']) && $_SESSION['login']['level'] == 'admin') {
    header('Location: dashboard/index.php');
    exit;
}
?>