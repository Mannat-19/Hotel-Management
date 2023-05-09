<?php ob_start();
session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:customer_login.php");
    }
?>