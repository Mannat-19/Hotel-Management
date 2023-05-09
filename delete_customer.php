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
    $name=$_GET['name'];
    include "dbconn.php";
    updateTable("delete from registration where name='$name'"); 
    mysqli_close($con);
    header("Location:show_details.php");
    ?>
</body>
</html>