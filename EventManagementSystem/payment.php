<?php include 'profilehead.php'; ?>
<br><h3 align="center">Payment Time!</h3><br>
<div align="center" style="height:50%; width:70%;margin-left:15%;">
            <table  class="table table-hover">
    <tr>
        <td style="font-weight:700">Customer no</td>
        <td style="font-weight:700">Name</td>
        <td style="font-weight:700">Event</td>
        <td style="font-weight:700">Eno</td>
        <td style="font-weight:700">Amount</td>
       <td style="font-weight:700">Make Payment</td>
                </tr>
                    <?php
    $user_check=$_SESSION['login_user'];
    $sql="select * from Event where Cno='$user_check' and Payment='0'";
      $result=mysqli_query($con,$sql);

      if($result)
          while($row=mysqli_fetch_array($result))
  {
      echo '<tr><td>'.$row['Cno'].'</td><td>'.$row['Name'].'</td><td>'.$row['Event'].'</td><td>'.$row['Eno'].'</td><td>'.$row['Budget'].'
      <td><a href="pay.php?Eno='.$row["Eno"].'"><button type="button"  style="background-color: #32726E;" class="btn  btn-success btn-sm" >Pay</button></a></td>
      </tr>';
  }
?>
  </table>
   </div>
