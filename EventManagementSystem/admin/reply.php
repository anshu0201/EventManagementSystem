<?php include '../db.php';?>
<?php
$eno=$_POST['eno'];
$reply=$_POST['reply'];
$option=$_POST['optradio'];
$sql="UPDATE Event SET Reply='$reply', Result='$option' WHERE Eno='$eno'";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));

 header( 'Location: registered.php' );
?>
