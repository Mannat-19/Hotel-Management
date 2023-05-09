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
    <h3><a href="fresh_requests.php">Fresh Requests</a></h3>
    <h3><a href="booked_rooms.php">Booked Rooms</a></h3>
    <h3><a href="cancelled_requests.php">Cancelled Requests</a></h3>
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