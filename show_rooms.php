<?php
include "check_session_admin.php";
include "header.php";
?>
<body>
<div id="wrapper">
<?php
    include "side.php";
    $x=$_SESSION['name'];
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
              <h2>Show Rooms</h2>
            </div>
        </div>   
               
    <?php
    include "dbconn.php";
    $y=showTable("select * from room");
    if(mysqli_num_rows($y)==0)
    {
        echo "No rooms to show!!";
    }
    else
    {
        ?>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Price</th>
                                            <th>Persons</th>
                                            <th>Floor</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($y))
        {
            $room_no=$row['room_no'];
            $img=$row['image'];
            echo "<tr>";
            echo "<td>".$row['room_no']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['persons']."</td>";
            echo "<td>".$row['floor']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['description']."</td>";
            echo  "<td><img src='image/".$img."' height='200px' width='200px'></td>";
            echo "<td><a href='delete_room.php?room_no=$room_no'>Delete</a></td>";
            echo "<td><a href='edit_room.php?room_no=$room_no'>Edit</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    mysqli_close($con);
    ?>
    </tbody>
    </table>
    </div>                            
    </div>
    </div>
</div>
</div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>