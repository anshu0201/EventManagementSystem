<?php include 'db.php';?>
<?php
$checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

$del_id = $checkbox[$i];
$sql = "DELETE FROM Event WHERE Eno='$del_id'";
mysqli_query($con,$sql) or die("Error in registration-> ".mysqli_error($con));
}
// if successful redirect to delete_multiple.php
header( 'Location: profile.php?delete=true' );
 

 ?>
