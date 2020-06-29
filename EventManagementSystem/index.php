<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="1.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" type="text/css" href="style.css">
<body class="main">

<div class="login-screen"></div>
    <div class="login-center">
        <div class="container min-height" style="margin-top: 20px;">
        	<div class="row">
                <div class="col-xs-4 col-md-offset-8">
                    <div class="login" id="card">
                    	<div class="front signin_form">
                        <?php
if (@$_GET['registered'] == 'true')
echo '
       <div class="container">

            <h3>Registration Complete</h3>

       </div>';
       ?>
       <?php
if (@$_GET['registered1'] == 'true')
echo '
<div class="container">

<h3>You are already registered.</h3>

</div>';
?>
       <?php
       if (@$_GET['flag'] == 'y')
       echo '
              <div class="container">

                   <h3>not registered</h3>

              </div>';
              ?>
              <?php
              if (@$_GET['flag1'] == 'y')
              echo '
                     <div class="container">

                          <h3>incorrect password</h3>

                     </div>';
                     ?>


                        <p>Login Your Account</p>
                          <form class="login-form" method="post" action="verify.php">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="email" class="form-control" name="email" placeholder="Type your email">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" class="form-control" name="password" placeholder="Type your password">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox">Remember me next time.</label>
                              </div>

                              <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Log in">
                                  <p><a href="#" class="forgot">Can't access your account?</a></p>
                                  <p><strong>New to TimeInfo?</strong><br><a href="#" id="flip-btn" class="signup signup_link">Sign up for a new account</a></p>
                              </div>
                          </form>
                        </div>
                        <div class="back signup_form" style="opacity: 0;">
                          <p>Sign Up for Your New Account</p>
                          <form class="login-form"  method="post"  action="register.php"  >
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="text" class="form-control" name="name" placeholder="Username">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" name="password" class="form-control" placeholder="Password"  id="txtPassword" >
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" name="password1" class="form-control" placeholder="Confirm Password" id="txtConfirmPassword">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="email" class="form-control"name="email" placeholder="Email">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-envelope"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="PhoneNo" class="form-control" name="phone" placeholder="phone no">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-envelope"></i>
                                      </span>
                                  </div>
                              </div>

                              <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Sign up" onclick="return Validate()">
                                  <br><br>
                                  <p>You have already Account So <a href="#" id="unflip-btn" class="signup">Log in</a></p>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
  $().ready(function() {
    	$("#card").flip({
    	  trigger: 'manual'
    	});
    });


    $(".signup_link").click(function() {

    	$(".signin_form").css('opacity', '0');
    	$(".signup_form").css('opacity', '100');


    	$("#card").flip(true);

    	return false;
    });

    $("#unflip-btn").click(function(){

    	$(".signin_form").css('opacity', '100');
    	$(".signup_form").css('opacity', '0');

      	$("#card").flip(false);

    	return false;

    });
    function Validate() {
    var password = document.getElementById("txtPassword").value;
    var confirmPassword = document.getElementById("txtConfirmPassword").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        document.getElementById('txtConfirmPassword').value = '';
        document.getElementById('txtConfirmPassword').style.borderColor = "#1b5a7c";
        return false;
    }
  }
     </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js">
    </script>

    </body>
