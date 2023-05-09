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
    // $x=$_GET['name'];
    include "dbconn.php";
    updateTable("update booking set status=2 where customer_id=$x"); 
    mysqli_close($con);
    header("Location:cancelled_requests.php?id=$x");
    ?>
</body>
</html>