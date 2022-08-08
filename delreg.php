<?php
include("check.php");
?>
<html>
<head>
<title>Delete Meeting</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url(login.jpeg")>
<form name="adm" method="post"/>
	<img src="assets/images/logo.png" alt="">
	<center>
		<h1 style="color:white;">
		<br>
			<b><U>CANCLE REGISTRATION</U></b>
		</h1>
	</center>
	<div id="login-box" >
	<center>
		  </br></br>
			<input type="email" name="email" style= "width:600" placeholder="Enter the email to delete" required/></br></br></br>
			<input type="submit" name="submit" value="Cancle Registration" style= width:600/>
			<button><a href="admhome.php">CANCLE</a></button>
		</center>
	</div>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
	{
		
		$email=$_POST["email"];
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		$query="delete from signup where email=$email";
		$k=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)==1)
		{
			echo"<script>alert('User is Successfully deleted')</script>";
			header("Refresh:1; url=admhome.html");
		}
		else
		{
			echo"<Script>alert('email not found!!!')</script>";
			header("Refresh:1; url=delreg.php");
		}
		
	}
				
?>