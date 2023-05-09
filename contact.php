<?php 
include "check_session_admin.php";
include "header.php"; 
?>
<body>
<?php
    include "side.php";
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
              <h2>Customers Contact Details</h2> 
<?php
include "dbconn.php";
$y=showTable("select * from contact");
if(mysqli_num_rows($y)==0)
{
    echo "No contacts yet!!";
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
                                            <th>Customer Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    }
    while($row=mysqli_fetch_array($y))
    {
        $id=$row['customer_id'];
        echo"<tr>";
        echo "<td>".$row['customer_id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['message']."</td>";
        echo "<td><a href='delete_contact.php?id=$id'>Delete</a></td>";
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
