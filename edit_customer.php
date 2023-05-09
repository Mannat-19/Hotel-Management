<?php
include "check_session_admin.php";
include "header.php";
?>
<?php    
    include "side.php";
    include "dbconn.php";
    $x=$_SESSION['name'];
    ?>
<div id="page-wrapper" >
    <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Room</h2>
        </div>
    </div>
    <?php
    if(isset($_POST['edit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $username=$_POST['username'];
        updateTable("update registration set name='$name', email='$email',
        phone='$phone' where username='$username'");
        header("Location:show_details.php");
    }
?>
<body>
<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="table-responsive">  
    <?php 
    $x=$_GET['username'];
    $y=showTable("select * from registration where username='$x'");
    $row=mysqli_fetch_array($y);
    ?>
    <form method="post">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row['name'] ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $row['email'] ?>">
            </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $row['phone'] ?>">
                </td>
            </tr>
            <input type="hidden" name="username" id="u" value="<?php echo $row['username'] ?>"/>
            <!-- <tr>                
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $row['password'] ?>">
                </td>
            </tr> -->
            <tr>
                <td align="center" colspan="2"><input type="submit" name="edit" value="Edit"></td>
            </tr>
    </table>
    </div>   
    </div>
    </div>
</div>
</div>
    </form>
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