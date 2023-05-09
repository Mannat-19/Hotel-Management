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
        $room_no=$_POST['room_no'];
        $price=$_POST['price'];
        $persons=$_POST['persons'];
        $floor=$_POST['floor'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $file=$_POST['old_image'];
        $file_name=$_FILES['image']['name'];
        $file_tmp=$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $img=explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($img));
        $val1=rand(0,100000);
        $val2=rand(0,100000);
        $val3=rand(0,100000);
        $newfilename=$val1.$val2.$val3.".".$img[1];
        if($_FILES['image']['size']==0)
        {
            updateTable("update room set price='$price',persons='$persons', floor='$floor',
            title='$title', description='$description' where room_no='$room_no'"); 
            // mysqli_close($con);
            header("Location:show_rooms.php");
        }
        else
        {
           unlink("image/$file");        
        if(move_uploaded_file($file_tmp,"image/".$newfilename))
           {
               // echo "Image uploaded";
               updateTable("update room set price='$price', persons='$persons', floor='$floor',
               title='$title', image='$newfilename', description='$description' 
               where room_no='$room_no'");
               // mysqli_close($con);
               header("Location:show_rooms.php");
            }
            else
            {
               echo "Not Uploaded";
            }
        }
        mysqli_close($con);
        header("Location:show_rooms.php");
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
    $x=$_GET['room_no'];
    $y=showTable("select * from room where room_no='$x'");
    $row=mysqli_fetch_array($y);
    ?>
    <form method="post" enctype="multipart/form-data">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            </tr>
                <input type="hidden" name="room_no" id="u" value="<?php echo $row['room_no'] ?>"/>
            <tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $row['price'] ?>">
            </td>
            </tr>
            <tr>
                <td>Persons</td>
                <td><input type="text" name="persons" value="<?php echo $row['persons'] ?>">
                </td>
            </tr>
            <tr>
                <td>Floor</td>
                <td><input type="text" name="floor" value="<?php echo $row['floor'] ?>">
                </td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $row['title'] ?>">
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description" cols="30" rows="10"><?php echo $row['description'] ?>
                </textarea>
            </td>
            </tr>
            <tr>
            <td>Overlook of room</td>
                <?php
                    $img=$row['image'];
                ?>
                <input type="hidden" name="old_image" value="<?php echo $row['image'] ?>"/>
                <td><input type="file" name="image" ></td>
                <td><?php echo "<img src='image/".$img."' height='200px' width='200px'>" ?></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><input type="submit" name="edit" value="Edit"></td>
            </tr>
    </table>
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