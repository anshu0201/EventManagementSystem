<?php include 'profilehead.php'; ?>
<?php
$eno=$_GET['Eno'] ;
$sql="select * from Event where Eno='$eno'";
    $result=mysqli_query($con,$sql);

    if($result)
        while($row=mysqli_fetch_array($result))
{
  echo '
  <br>
  <div class="container">
         <table class="table table-striped">
            <tbody>
               <tr>
                  <td colspan="1">
                     <form class="well form-horizontal" action="changeapply.php?Eno='.$row["Eno"].'"method="post">
                        <fieldset>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Full Name</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="name" name="name" value="'.$row["Name"].'" class="form-control" required="true" value="" type="text"></div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Address </label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address" name="address" value="'.$row["Address"].'" class="form-control" required="true" value="" type="text"></div>
                              </div>
                           </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">City</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" value="'.$row["City"].'" class="form-control" required="true" value="" type="text"></div>
                              </div>
                           </div>
                      <div class="form-group">
                              <label class="col-md-4 control-label">Event Type</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group">
                                    <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                    <select class="selectpicker form-control" name="event">
                                    <option>'.$row["Event"].'</option>
                                       <option>Wedding</option>
                                       <option>Birthday Party</option>
                                       <option>Funeral</option>
                                       <option>Reception</option>
                                       <option>Office Meeting</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">No of guests</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="noofguests" name="noofguests" value="'.$row["Noofguests"].'" class="form-control" required="true" value="" type="text"></div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Budget</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="budget" name="budget" value="'.$row["Budget"].'" class="form-control" required="true" value="" type="text"></div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Requested hotel</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group">
                                    <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                    <select class="selectpicker form-control" name="hotel">
                                       <option>'.$row["ReqHotel"].'</option>
                                       <option>Taj Lake Palace</option>
                                       <option>The Leela Palace</option>
                                       <option>The Oberoi Amarvilas</option>
                                       <option>Umaid Bhawan Palace </option>
                                       <option>The Paul</option>
                                       <option>Moevenpick Hotel</option>
                                       <option>Wildflower Hall</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Food Preference</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group">
                                    <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                    <select class="selectpicker form-control" name="food">
                                       <option>'.$row["Food"].'</option>
                                       <option>Vegetarian</option>
                                       <option>Non Vegetarian</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Email</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" value="'.$row["Email"].'" class="form-control" required="true" value="" type="text"></div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Phone Number</label>
                              <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" value="'.$row["PhoneNo"].'" class="form-control" required="true" value="" type="PhoneNo"></div>
                              </div>
                           </div>

                           <button name="dm" type="submit"style="margin-bottom:3.5%; margin-left:43%;" class=" btn btn-default">Book</button>
                        </fieldset>
                     </form>
                  </td>

               </tr>
            </tbody>
         </table>
      </div>

';
}
       ?>
