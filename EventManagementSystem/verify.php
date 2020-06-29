<?php include 'db.php'; ?>
<?php

$email=mysqli_real_escape_string($con,$_POST['email']);
$password=$_POST['password'];

$sql="SELECT * FROM customer WHERE EmailID='$email'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

        if($count>0)
        {
        $sql="SELECT * FROM customer WHERE EmailID='$email' and Password='$password'";
        $result=mysqli_query($con,$sql);

        // Mysql_num_row is counting table row
        $count=mysqli_num_rows($result);
        if($count>0)
        {
          while ($row= mysqli_fetch_array($result))
            {

                $name   = $row['Name'];
                $cid   = $row['CID'];
            }
          session_start();
          $_SESSION['login_user']=$cid;
          header( 'Location:profile.php' );
        }
        else {
           header( 'Location:index.php?flag1=y' );
        }
        }

else
{
 header( 'Location: index.php?flag=y' );
}
?>
