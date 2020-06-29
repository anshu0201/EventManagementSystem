<?php include 'header.php'; ?>
<?php include '../db.php';?>

<h3 align="center">Registered Events<h3>
  <div align="center" style="height:50%; width:70%;margin-left:15%;">
              <table  class="table table-hover">
      <tr>
          <td style="font-weight:700">Customer no</td>

          <td style="font-weight:700">Name</td>

          <td style="font-weight:700">Event</td>

          <td style="font-weight:700">Eno</td>
            <td style="font-weight:700">Budget</td>
    <td style="font-weight:700">View</td>
      <td style="font-weight:700">Action</td>

                  </tr>

                      <?php

    $sql="select * from Event where Result='Accept'";
        $result=mysqli_query($con,$sql);

        if($result)
            while($row=mysqli_fetch_array($result))
    {

        if($row["Event"]=="Wedding")
        $cal=123;
        if($cal>$row["Budget"])
        {
        $res="not POssible";
      }
      else {
$res="possible";
      }
        echo '<tr><td>'.$row['Cno'].'</td><td>'.$row['Name'].'</td><td>'.$row['Event'].'</td><td>'.$row['Eno'].'</td><td>'.$row['Budget'].'<td><button type="button"  style="background-color: #32726E;" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#myModal'.$row["Eno"].'">View</button></td><td><button type="button"  style="background-color: #32726E;" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#myModal'.$row["Eno"].'">View</button></td><td>
        <form>
        </form>
        </td></tr>';
        echo'
         <div class="modal fade" id="myModal'.$row["Eno"].'" role="dialog" tabindex="-1"  aria-hidden="true" width:"60%;">
         <div class="modal-dialog modal-lg">
           <div class="modal-content" id="menu">
                 <div class="modal-header">
                   <h5 class="modal-title">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p>CNo :'.$row["Cno"].'</p>
                     <p>Name :'.$row["Name"].'</p>
                     <p>Address :'.$row["Address"].'</p>
                     <p>City :'.$row["City"].'</p>
                     <p>Event :'.$row["Event"].'</p>
                     <p>No of Guests :'.$row["Noofguests"].'</p>
                      <p>Budget :'.$row["Budget"].'</p>
                      <p>Requested Hotel :'.$row["ReqHotel"].'</p>
                      <p>'.$res.'</p>
                      <p>Feedback</p>
                      <div class="panel-body">
                        <form role="form"  action="reply.php" method="post">
                            <fieldset>
<label align="left">Event Number</label>
<input type="text" class="form-control no-border" name="eno" id="inputEmail3" value="'.$row['Eno'].'">

                                <div class="form-group">
    <textarea class="form-control" name="reply" rows="3" placeholder="Write in your wall" autofocus="" required></textarea>


                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio" value="Accept">Accept
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio" value="Decline">Decline
                                  </label>
                                </div>

                        <button type="submit" class="[ btn btn-success ]" data-loading-text="Loading...">Post reply</button>
                            </fieldset>
                        </form>
                    </div>

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
                    
              </div>
