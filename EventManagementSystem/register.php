<?php include 'db.php'; ?>
<?php
$name=$_POST['name'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password1=mysqli_real_escape_string($con,$_POST['password1']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$sql="SELECT * FROM customer WHERE EmailID='$email'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
if($count>0)
{
header( 'Location: index.php?registered1=true' );
}
else{
$sql="INSERT INTO `customer`(`Name`,`PhoneNo`, `EmailID`, `Password`) VALUES ('$name','$phone','$email','$password')";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));

 header( 'Location: index.php?registered=true' );}
?>
