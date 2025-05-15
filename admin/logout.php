<?php
// TODO: Hapus session login
// TODO: Redirect ke login
session_start();
unset($_SESSION['?']); // <-- fill this section
header('Location: ?');
?>