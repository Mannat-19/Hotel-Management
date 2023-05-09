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
                    <h2>Fresh Requests</h2>               
                </div>
            </div> 
<?php
include "dbconn.php";
$y=showTable("select * from booking where status=0 order by arrival asc");    
if(mysqli_num_rows($y)==0)
{
    echo "No fresh requests yet!!";
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
                                            <th>Arrival</th>
                                            <th>Departure</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Adults</th>
                                            <th>Children</th>
                                            <th>Room Preference</th>
                                            <th>Status</th>
                                            <th>Approval Request</th>
                                            <th>Cancel Request</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    }
    while($row=mysqli_fetch_array($y))
    {
        $id=$row['customer_id'];
        echo"<tr>";
        echo "<td>".$row['arrival']."</td>";
        echo "<td>".$row['departure']."</td>";
        echo "<td>".$row['first']."</td>";
        echo "<td>".$row['last']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['adults']."</td>";
        echo "<td>".$row['children']."</td>";
        echo "<td>".$row['preference']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td><a href='approve.php'>Approve</a></td>";
        echo "<td><a href='cancel.php'>Cancel</a></td>";
        echo"</tr>";
        $_SESSION['name']=$id;
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