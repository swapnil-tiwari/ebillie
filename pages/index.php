<?php
	session_start();
	if(!isset($_SESSION['login_success']))
	{
		$_SESSION['login_success']=FALSE;
	}
  if(!isset($_SESSION['login_failed']))
	{
		$_SESSION['login_failed']=FALSE;
	}
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Billing system</title>

  	<link href="https://fonts.googleapis.com/css?family=Atomic+Age|Ubuntu+Condensed" rel="stylesheet">

  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <link rel="stylesheet" type="text/css" href="../css/style_iphone.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Libre+Baskerville" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">



  </head>
  <body>
    
    <figure style="position: absolute; margin-left:100px;">
     <div class="iPhone">
              <div class="iPhoneInner">
                <div class="camera"></div>
                <div class="smallTopCirc"></div>
                <div class="oval"></div>
                <div class="iScreen">
                <center>
                  <br><h3 style="font-family: 'Libre Baskerville', serif; font-size: 25px;
                  margin-right: 9px;">&nbsp;Save Time<br>&nbsp;&nbsp;&nbsp;Generate Ebills</h3>
                  <br><br><br><center><h3 style="font-family: 'Atomic Age', cursive;">e-Billie <i class="fa fa-paw" aria-hidden="true"></i></h3></center>
                  <br><br><strong>&nbsp;&nbsp;An Innovation By CodeNova</strong>
                  <br><br><h3 class="logo" style="margin-left: -50px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/CoDe&gt; <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n<i class="fa fa-lightbulb-o flicker" aria-hidden="true" style="color: #FDCA40"></i>va</h3>
                  <!--<img src="./images/logo.jpeg" style="width: 100px; height: 100px; margin-left: 65px; margin-top: 30px;">-->
                  </center>
                </div>
                <div class="circButton"></div>
              </div>
            </div>
            
    </figure>
  	<h1 style="margin-left: 320px;">e-Billie <i class="fa fa-paw" aria-hidden="true"></i></h1> 
    <br>
    <br>
  	<form action="./login.php" method="POST" style="margin-left: 300px;">
  		<input type="text" name="email" class="txt-sml" placeholder="Email"><br>
  		<input type="password" name="pass" class="txt-sml" placeholder="Password"><br>
      <center>
        <?php
						if($_SESSION['login_failed'])
						{
							?><center><font color="red" size="4" face="calibri">Invalid username or password</font></center>
							<?php
							$_SESSION['login_failed']=FALSE;
						}
						?>
  		  <button class="btn btn-dark" id= "submit-btn" type="submit" name="submit" >Submit</button>
      </center>
      <br>
  	</form>

  	<br>
  	<a href="./signup.html">Or SignUp Here</a>

  </body>
<!--
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyB5qAchw89Ugn3MSJnJ21QFWKfazVaR6NA",
    authDomain: "ebillie-a1524.firebaseapp.com",
    databaseURL: "https://ebillie-a1524.firebaseio.com",
    projectId: "ebillie-a1524",
    storageBucket: "ebillie-a1524.appspot.com",
    messagingSenderId: "8401639612"
  };
  fuction auth_user()
  {
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;

  }
  firebase.initializeApp(config);
</script>-->
</html>
