<?php include 'db.php'; ?>
<?php

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
if($hotel="Taj Lake Palace")
  $cost=100*$noofguests+1000;
else  if($hotel="The Leela Palace")
    $cost=100*$noofguests+900;
else  if($hotel="The Oberoi Amarvilas")
          $cost=85*$noofguests+955;
else  if($hotel="Umaid Bhawan Palace")
          $cost=85*$noofguests+900;
else  if($hotel="The Paul")
        $cost=85*$noofguests+800;
else  if($hotel="Moevenpick Hotel")
       $cost=85*$noofguests+750;
else  if($hotel="Wildflower Hall")
      $cost=85*$noofguests+650;
      else {
        $cost=0;
}
$profit=$budget-$cost;
$user_check=$_SESSION['login_user'];
$sql="INSERT INTO `Event` (`Name`,`Address`, `City`, `Event`, `Noofguests`,`Budget`, `ReqHotel`,`Food`, `Email`, `PhoneNo`, `Cno`,`Amount`, `Profit`, `Payment`)
VALUES ('$name','$address','$city','$event','$noofguests','$budget','$hotel','$food','$email','$phoneNumber ','$user_check','$cost','$profit','0')";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));
 header( 'Location: profile.php?registered=true' );
?>
