<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function isLogin($requiredRole = null) {
    if (!isset($_SESSION['login'])) { // <-- fill this section
        header('Location: ../login.php');
        exit;
    }
}