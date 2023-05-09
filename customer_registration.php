<?php ob_start();
session_start();
include "header.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
        function validation() 
        {
            result = false;
            error = 0;
            if (document.myForm.name.value.length == 0) 
            {
                document.getElementById("name_error").style.display = "block";
                error = error + 1;
            }
            else 
            {
                document.getElementById("name_error").style.display = "none";
            }
            if (document.myForm.email.value.length == 0) 
            {
                document.getElementById("email_error").style.display = "block";
                error = error + 1;
            }
            else 
            {
                document.getElementById("email_error").style.display = "none";
            }
            if (document.myForm.phone.value.length == 0) 
            {
                document.getElementById("phone_error").style.display = "block";
                error = error + 1;
            }
            else 
            {
                document.getElementById("phone_error").style.display = "none";
            }
            if (document.myForm.username.value.length == 0) 
            {
                document.getElementById("user_error").style.display = "block";
                error = error + 1;
            }
            else 
            {
                document.getElementById("user_error").style.display = "none";
            }
            if (document.myForm.pass.value.length == 0) 
            {
                document.getElementById("password_error").style.display = "block";
                error = error + 1;
            }
            else 
            {
               document.getElementById("password_error").style.display = "none";
            }
            if (error == 0) 
            {
                result = true;
            }
            return result;
        }
    </script>
    <style>
        #name_error, #email_error, #phone_error, #user_error,#password_error
        {
            color:red ;
            display: none;
        }
        </style>
    <form  name="myForm" method="post" onsubmit="return validation()">
        <table border="1">
            <caption>Customer Registration</caption>
            <tr>
                <th colspan="2">Registration details</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name">
                <span id="name_error">Please fill your name</span>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email">
                <span id="email_error">Please fill email</span>
            </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone">
                <span id="phone_error">Please fill mobile number</span>
            </td>
            </tr>
            <tr>
                <th colspan="2">Login details</th>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username">
                <span id="user_error">Please fill username</span>
            </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass">
                <span id="password_error">Please fill password</span>
            </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="register" value="Register"></td>
            </tr>

        </table>
    </form>
    <?php
    include "dbconn.php";
    if(isset($_POST['register']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $username=$_POST['username'];
        $password=$_POST['pass'];
        updateTable("insert into registration(name,email,phone,username,password) 
        values('$name','$email','$phone','$username','$password')");
        mysqli_close($con);
        echo "Successfully registered";
        ?>
        <br>
        <a href="index1.php">Go to home page</a>
        <?php
    }
    ?>
</body>
</html>