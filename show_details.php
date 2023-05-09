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
                <h2>Customers Registration Details</h2>               
            </div>
            </div>          
    <?php
    include "dbconn.php";
    $y=showTable("select * from registration");    
    if(mysqli_num_rows($y)==0)
    {
        echo "No registrations yet!!";
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
        <tbody>
        <?php
    }
    while($row=mysqli_fetch_array($y))
    {
        $user=$row['username'];
        echo"<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td><a href='delete_customer.php?username=$user'>Delete</a></td>";
        echo "<td><a href='edit_customer.php?username=$user'>Edit</a></td>";
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