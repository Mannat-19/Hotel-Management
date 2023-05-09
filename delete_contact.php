<?php
include "check_session_admin.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=$_SESSION['name'];
    $y=$_GET['id'];
    include "dbconn.php";
    updateTable("delete from contact where customer_id='$y'"); 
    mysqli_close($con);
    header("Location:contact.php");
    ?>
</body>
</html>