<?php include 'session.php'; ?>
<html>
<head>
<title>Your Home Page</title>
<style>
.bar
           {
               font-family:    "Times New Roman", Times, serif;
               font-size:      40px;
               font-weight:    bold;
           }

#logout {
  padding-right: 1%;
}
.sliding-middle-out {
    display: inline-block;
    position: relative;
    padding-bottom: 3px;
}
.sliding-middle-out:after {
    content: '';
    display: block;
    margin: auto;
    height: 3px;
    width: 0px;
    background: transparent;
    transition: width .5s ease, background-color .5s ease;
}
.sliding-middle-out:hover:after {
    width: 100%;
    background: blue;
}
body {
  font-family: 'Roboto', sans-serif;
  padding: 0;
  margin: 0;
}

small {
  font-size: 12px;
  color: rgba(0, 0, 0, 0.4);
}

h1 {
  text-align: center;
  padding: 50px 0;
  font-weight: 800;
  margin: 0;
  letter-spacing: -1px;
  color: inherit;
  font-size: 40px;
}

h2 {
  text-align: center;
  font-size: 30px;
  margin: 0;
  font-weight: 300;
  color: inherit;
  padding: 50px;
}

.center {
  text-align: center;
}

section {
  height: 40vh;
}

/* NAVIGATION */
nav {
  width: 80%;
  margin: 0 auto;
  background: #fff;
  padding: 50px 0;
  box-shadow: 0px 5px 0px #dedede;
}
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: black;
  font-weight: 1000;
  text-transform: uppercase;
  margin: 0 5px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: black;
}


/* stroke */

/* Circle */
nav.circle ul li a {
  position: relative;
  overflow: hidden;
  z-index: 1;
}
nav.circle ul li a:after {
  display: block;
  position: absolute;
  margin: 0;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '.';
  color: transparent;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  background: transparent;
}
nav.circle ul li a:hover:after {
  -webkit-animation: circle 1.5s ease-in forwards;
}

/* SHIFT */



/* Keyframes */

/* Keyframes */
@-webkit-keyframes circle {
  0% {
    width: 1px;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    height: 1px;
    z-index: -1;
    background: #eee;
    border-radius: 100%;
  }
  100% {
    background:  #ffeead;
    height: 5000%;
    width: 5000%;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 0;
  }
}
#link:hover,active,visited{

      text-decoration: none;
      }.holder {
  width: 900px;
  margin: 0 auto;
}.border{
	padding: 5px;
		background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 34%, #88d8b0 34%);
	background-size: 400% 400%;
	height: 400px;
	background-position: 25% 50%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 5s ease infinite;
}
.inner-cutout{
	padding: 20px 0;
	display: block;
	background-color:#ff6f69;/*#ff6f69*/

	margin: 2%;
	padding-bottom: 10px;
	height: 300px;
	background: radial-gradient(#ff6f69, #ff8b87);
	 background-size: 300%;
	background-position:50% 50%;

}
.knockout {

	vertical-align: middle;
	text-align: center;
	font-family: 'Pacifico', cursive;
	font-size:50pt;
	color: blue;
	color: #fff;
	background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 34%, #88d8b0 34%);
	background-size: 400%;
	 -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
}
.knockout{
		animation: Gradient 5s ease infinite;
		-webkit-animation: Gradient 15s ease infinite;
		-moz-animation: Gradient 5s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 30% 50%
	}
	50% {
		background-position: 25% 50%
	}
	100% {
		background-position: 30% 50%
	}

}



.main{
	width: 100%;
	height:350px;
   margin-bottom: .01%;
}


/* Main styles */


</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" type="text/css" href="style.css">

</head>




<body>
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<div class="main">
	<div class = "border">
		<div class = "inner-cutout">
      <div align="right"  id="logout"><a href="logout.php" class="btn btn-info btn-sm">
              <span class="glyphicon glyphicon-log-out"></span> Log out
            </a></div>
			<h1 class="knockout"> Magicians Here !!!</h1>

		</div>
	</div>
</div>
<div id="profile" >

  <div align="center" class="bar">


  <h2 class="sliding-middle-out"><b id="welcome" align="center" >Welcome : <i><?php echo $login_session; ?></i></b>
</h1>
</div>




        <link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
          <nav class="circle" style="background-color:#88d8b0  ;width: 100%;height:70px;padding-top:5px;padding-bottom:5px;">
            <ul>
              <li><b><a href="profile.php">Home</a></li>
              <li><a href="book.php">Book</a></li>
              <li><a href="update.php">Update</a></li>
              <li><a href="feedback.php">Feedback</a></li>
              <li><a href="payment.php">Payment</a></b></li>
            </ul>
          </nav>


</div>
