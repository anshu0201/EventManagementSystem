<?php include 'db.php'; ?>
<?php
$eno=$_GET['Eno'];
$sql="select * from Event where Eno='$eno'";
    $result=mysqli_query($con,$sql);

    if($result)
        while($row=mysqli_fetch_array($result))
{
  $amount=$row['Amount'];
  $cno=$row['Cno'];
}
$name=mysqli_real_escape_string($con,$_POST['name']);
$number=mysqli_real_escape_string($con,$_POST['number']);
$cvv=mysqli_real_escape_string($con,$_POST['cvv']);
$sql="INSERT INTO `Payment` (`Name`,`CardNo`, `CVV`, `Eno`, `Cno`, `Amount`)
VALUES ('$name','$number','$cvv','$eno','$cno','$amount')";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));
$sql="UPDATE Event SET Payment='1' where Eno="$eno";";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));
 header( 'Location:payment.php?paid=true' );
 ?>
