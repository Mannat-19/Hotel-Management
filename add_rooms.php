<?php
include "check_session_admin.php";
include "header.php"; 
?>
<body>
<?php
    include "side.php";
    $x=$_SESSION['name'];
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
              <h2>Add Rooms</h2>
            </div>
        </div>  
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form  name="myForm" method="post" enctype="multipart/form-data">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tr>
                <td>Floor</td>
                <td><input type="text" name="floor">
                <!-- <span id="phone_error">Please fill mobile number</span> -->
            </td>
            </tr>
            <tr>
                <td>Room Number</td>
                <td><input type="text" name="room_no">
                <!-- <span id="name_error">Please fill your name</span> -->
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price">
                <!-- <span id="email_error">Please fill email</span> -->
            </td>
            </tr>
            <tr>
                <td>Number of persons</td>
                <td><input type="text" name="persons">
                <!-- <span id="user_error">Please fill username</span> -->
            </td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title">
                <!-- <span id="user_error">Please fill username</span> -->
            </td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description" cols="30" rows="10"></textarea>
                <!-- <span id="phone_error">Please fill mobile number</span> -->
            </td>
            </tr>
            <tr>
                <td>Overlook of room</td>
                <td><input type="file" name="image">
                <!-- <span id="phone_error">Please fill mobile number</span> -->
            </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="add" value="Add"></td>
            </tr>

        </table>
        </div>                            
    </div>
    </div>
</div>
</div>
    </form>
<?php
    include_once "dbconn.php";
    if(isset($_POST['add']))
    {
        $room_no=$_POST['room_no'];
        $price=$_POST['price'];
        $persons=$_POST['persons'];
        $floor=$_POST['floor'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        // $image= $_FILES['image']['name'];
        $file_name=$_FILES['image']['name'];
        $file_tmp=$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $img=explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($img));
        $val1=rand(0,100000);
        $val2=rand(0,100000);
        $val3=rand(0,100000);
        $newfilename=$val1.$val2.$val3.".".$img[1];
        move_uploaded_file($file_tmp,"image/".$newfilename);
        // move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$_FILES['image']['name']);
        if(updateTable("insert into room(room_no,price,persons,floor,title,description,image) 
        values($room_no,$price,$persons,$floor,'$title','$description','$newfilename')"))
        {
            // echo "Image uploaded";
            echo "Successfully added the room";
            // if(empty($image))
            // {
            //     echo "Not Uploaded";
            // }
        }
        else
        {
            echo "Not Uploaded";
        }
        // mysqli_close($con);
    }
?>
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