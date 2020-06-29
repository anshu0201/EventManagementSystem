<?php include 'db.php';?>
<?php
$eno=$_GET['Eno'] ;
$name=$_POST['name'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$event=mysqli_real_escape_string($con,$_POST['event']);
$noofguests=mysqli_real_escape_string($con,$_POST['noofguests']);
$budget=mysqli_real_escape_string($con,$_POST['budget']);
$hotel=mysqli_real_escape_string($con,$_POST['hotel']);
$food=mysqli_real_escape_string($con,$_POST['food']);
$phoneNumber=mysqli_real_escape_string($con,$_POST['phoneNumber']);


$sql="UPDATE Event SET Name='$name',Address='$address',City='$city',Event='$event',Noofguests='$noofguests',Budget='$budget',ReqHotel='$hotel',Food='$food',Reply='',Phoneno='$phoneNumber', Result='' WHERE Eno='$eno'";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));
 header( 'Location: profile.php?registered=true' );
?>
