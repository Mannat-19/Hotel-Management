<?php
ob_start();
session_start();
unset($_SESSION['username']);
session_destroy();
header("location:customer_login.php");
?>