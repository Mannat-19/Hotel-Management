<?php 
$con=mysqli_connect("localhost","root","root","project");
function updateTable($query)
{
    global $con;
    if(mysqli_query($con,$query))
    {
        return true;
    }

    else
    {
        return false;
    }

}
function showTable($query)
{
    global $con;
    $result=mysqli_query($con,$query);
    return $result;
    // mysqli_close($con);
}
?>