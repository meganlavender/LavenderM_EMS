
<!DOCTYPE html>
<html>
	<head> 
		<title>Login Page</title>
		
		<link rel="stylesheet" href="css/mystyles1.css" />
		<script type="text/javascript" src="js/myjs1.js"></script>
	</head>

	<body bgcolor="#fff">
	<?php include ("dbpractice.php"); ?>
		<br><br><br>
	<center>
   		<img src = "images/jbu.png" width = "5%" />
    </center>
	<h1 align="center"> Login </h1>
  <ul>
  </ul>
  <center>
  <form name="login-form" method="POST" action="validate-login1.php">
    <h5> Enter your UserID: </h5> 
    <input name="uid" id="uid"/><br>
    <h5> Enter your Password: </h5>
		<input name="pwd" id="pwd"/><br><br>

		<input type="submit" value="Login" class = "linktext"/>
  </center>

	</body>
</html>