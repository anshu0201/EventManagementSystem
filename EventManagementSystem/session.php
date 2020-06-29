<?php include 'db.php'; ?>
<?php
$user_check=$_SESSION['login_user'];
$sql="SELECT * FROM customer WHERE CID='$user_check'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$login_session =$row['Name'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
 header( 'Location: index.php' );// Redirecting To Home Page
}
?>
