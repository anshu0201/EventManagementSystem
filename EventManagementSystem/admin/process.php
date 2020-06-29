<?php include '../db.php'; ?>
<?php
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
if($email=="admin@nitsikkim.ac.in"&& $password="admin@nit")
{
header( 'Location: admin.php' );
}
else {
header( 'Location: index.php?registered=true' );
}
?>
