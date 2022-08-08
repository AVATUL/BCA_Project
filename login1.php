<?php
ob_start();
//include 'Facebook/autoload.php';
include('login.php');
if(isset($_SESSION['email']))
{
	header('Location:userhome.php');
}
?>
<html>
<head>
<title>LogIn page</title>
<link rel="stylesheet" href="style.css">
<script>
function myfun(){
	var x = document.forms["myForm"]["email"].value;
	var y = document.forms["myForm"]["email"].value;
	if(x=="")
	{
		alert("please fill all the fields");
	}
	if(y=="")
	{
		alert("please fill all the fields");
	}
}
</script>




</head>
<body style="background-image:url(login.jpeg")>

<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error);
?>
<form method="post" name="myForm" action="" >
	<img src="assets/images/logo.png" alt="">
	<center>
		<h1 style="color:white;">
		<br>
			<b>Log In :</b>
		</h1>
	</center>
	<div id="login-box" >
		<div class="left">
		  <br>
		  <br>
		  <br>
			<input type="text" name="email" placeholder="User Id.."/>
			<input type="password" name="password" placeholder="password..."/>
			<input type="checkbox" name="re" id="re" ><label>Remember Me</label>
			<input type="submit" name="submit" value="LogIn" onclick="myfun();"/>
			
			<button > <a href="signup.php">Sing Up </a> </button>
		</div>
		<div class="right">
		<br>
		<br>
			<button class="social-signin facebook"><a href="Facebook/test.php" style="color:#ffffff">Log in with facebook </a></button>
			<button class="social-signin twitter">Log in with Twitter</button>
			<button class="social-signin google">Log in with Google+</button>
		</div>
		<div class="or"> OR </div>
		
		</div>
		</form>
	</body>
	</html>
	 