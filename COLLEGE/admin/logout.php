<?php
session_start();
unset($_SESSION['usrid']);
unset($_SESSION['psw']);
session_destroy();
header('location:login.php');
?>
