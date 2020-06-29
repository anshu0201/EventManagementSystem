


<?php include 'profilehead.php'; ?>
<br>
<h3 align="center">Updates</h3>
<script>
function calc(){

      document.getElementById('hidden_div').style.display = "block";
}
</script>
<div align="center" style="height:50%; width:70%;margin-left:15%;">
            <table  class="table table-hover">
    <tr>
        <td style="font-weight:700">Customer no</td>

        <td style="font-weight:700">Name</td>

        <td style="font-weight:700">Event</td>

        <td style="font-weight:700">Eno</td>
        <td style="font-weight:700">Budget</td>
       <td style="font-weight:700">Updates</td>
       <td style="font-weight:700">Change Proposal</td>
        <td style="font-weight:700">Delete</td>

                </tr>

                    <?php
$user_check=$_SESSION['login_user'];
  $sql="select * from Event where Cno='$user_check'";
      $result=mysqli_query($con,$sql);

      if($result)
          while($row=mysqli_fetch_array($result))
  {
      if($row["Result"]=="Accept")
      {
        $res="Congratulations, The Team has accepted your offer ";
      }
      else if($row["Result"]=="Decline"){
        $res="Sorry, We can't make it";
      }
      else {
        $res="Sorry for delay Our team is looking at our your proposal currently";
      }
      echo '<tr><td>'.$row['Cno'].'</td><td>'.$row['Name'].'</td><td>'.$row['Event'].'</td><td>'.$row['Eno'].'</td><td>'.$row['Budget'].'
      <td><button type="button"  style="background-color: #32726E;" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#myModal'.$row["Eno"].'">View</button></td>
      <td><a href="change.php?Eno='.$row["Eno"].'"><button type="button"  style="background-color: #32726E;" class="btn  btn-success btn-sm" >Change Proposal</button></a></td>
      <td>
      <form action="delete.php" method="post"><div class="checkbox"" >
  <label ><input type="checkbox" name="checkbox[]"  onclick="calc();" value="'.$row["Eno"].'">Delete</label>
</div></td>
      </tr>';
      echo'
       <div class="modal fade" id="myModal'.$row["Eno"].'" role="dialog" tabindex="-1"  aria-hidden="true" width:"60%;">
       <div class="modal-dialog modal-lg" >
         <div class="modal-content" style="float:left;">
               <div class="modal-header">
                 <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body"style="float:left;"><?php
                   <p>'.$row["Reply"].'</p>
                   <p>'.$res.'</p>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                    </div>
                  </div>
                  ';

  }
?>


                    </table>
<div id="hidden_div" style="display: none;"><button type="submit" class="btn btn-link">Delete</button></div>
        </form>    </div>
