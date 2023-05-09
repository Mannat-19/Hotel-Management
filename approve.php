<?php
include "check_session_admin.php";
include "header.php";
?>
<body>
<div id="wrapper">
    <?php
    include "side.php";
    ?>
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Customer Details</h2>               
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                            <th>Customer Id</th>
                                            <th>Arrival</th>
                                            <th>Departure</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Adults</th>
                                            <th>Children</th>
                                            <th>Room Preference</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php 
    include "dbconn.php";
    $x=$_SESSION['name'];
    $y=showTable("select * from booking where customer_id=$x");
    while($row=mysqli_fetch_array($y))
    {
        echo"<tr>";
        echo "<td>".$row['customer_id']."</td>";
        echo "<td>".$row['arrival']."</td>";
        echo "<td>".$row['departure']."</td>";
        echo "<td>".$row['first']."</td>";
        echo "<td>".$row['last']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['adults']."</td>";
        echo "<td>".$row['children']."</td>";
        echo "<td>".$row['preference']."</td>";
        echo"</tr>";
    }
    echo"</table>";
	?>    
    </tbody>
    </table>
    </div>
</div>
</div>
</div>
</div>
<form>
    <h3><a href="show_rooms.php">Show rooms</a></h3>
</form>
<script>
    function validation()
    {
        result = false;
        error = 0;
        if (document.myForm.room.value.length == 0) 
        {
            document.getElementById("error").style.display = "block";
            error = error + 1;
        }
        else 
        {
            document.getElementById("error").style.display = "none";
        }
        if (error == 0) 
        {
            result = true;
        }
        return result;
    }
</script>
<style>
        #error
        {
            color:red ;
            display: none;
        }
    </style>
<?php
if(isset($_POST['allot']))
{
    $room=$_POST['room'];
    updateTable("update booking set status=1,room_no=$room where customer_id=$x");
    header("Location:booked_rooms.php");
    $_SESSION['name']=$room;
}
?>
<div class="row">
            <div class="col-md-12">
              <h2>Allot Room</h2>
            </div>
        </div>   
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <form method="post" name="myForm" onsubmit= "return validation()">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <tr>
                                            <td>Room Number</td>
                                            <td>
                                            <input type="number" name="room">
                                            <span id="error">Please fill room number</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">
                                            <input type="submit" name="allot" value="Allot Room">
                                            </td>
                                        </tr>
                            </table>
                            </form>
    </div>                            
    </div>
    </div>
</div>
</div>

</body>
</html>