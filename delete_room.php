<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=$_GET['room_no'];
    include "dbconn.php";
    updateTable("delete from room where room_no='$x'"); 
    mysqli_close($con);
    header("Location:show_rooms.php");
    ?>
</body>
</html>