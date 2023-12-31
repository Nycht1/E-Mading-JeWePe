<?php

session_start();
// Unset semua session variabel
unset($_SESSION['email']);
unset($_SESSION['id_account']);
// Unset All
session_unset();
//Destroy Sess ion
session_destroy();
//Arahkan ke halaman Login
header('location: ../main/login.php?pesan=logout');
exit;
?>