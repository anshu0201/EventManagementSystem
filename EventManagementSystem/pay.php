<?php include 'profilehead.php'; ?>

<br><br>
<?php
$eno=$_GET['Eno'];
echo '
<div class="container" style="padding-left:10%">
  <form class="form-horizontal" role="form" method="post" action="complete.php?Eno='.$eno.'" >
    <fieldset>

      <legend align=center>Payment</legend>
  ' ;
      $sql="select * from Event where Eno='$eno'";
          $result=mysqli_query($con,$sql);

          if($result)
              while($row=mysqli_fetch_array($result))
      {
        echo '<h3><b> Amount to be paid : Rs'.$row['Budget'].'</b></h3>';
          echo '<h3><b> Event Number : '.$row['Eno'].'</b></h3>';
      }
      echo '
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="card-holder-name" placeholder=" Name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name=" number" id="card-number" placeholder="Debit/Credit Card Number">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Pay Now</button>
        </div>
      </div>
    </fieldset>
  </form>
</div> ';
?>
