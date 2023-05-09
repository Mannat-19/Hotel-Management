<?php
ob_start();
session_start();
unset($_SESSION['name']);
session_destroy();
header("location:admin_login.php");
?>