<?php
ob_start();
include('admin.php');
if(isset($_SESSION['email']))
{
	header('Location:admhome.php');
}
?>
<html>
<head>
<title>LogIn page</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url(login.jpeg")>

<form method="post" action="">
	<img src="assets/images/logo.png" alt="">
	<center>
		<h1 style="color:white;">
		<br>
			<b>Log In :</b>
		</h1>
	</center>
	<div id="login-box" >
	<center>
		  </br></br></br></br></br>
			<input type="text" name="email" placeholder="User Id.." required/>
			<input type="password" name="password" placeholder="password..." required/>
			<input type="checkbox" name="re" id="re" ><label>Remember Me</label><br></br></br>
			<input type="submit" name="submit" value="LogIn"/>
		</center>
	</div>
</body>
</html>
