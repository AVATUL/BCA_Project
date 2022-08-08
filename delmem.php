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
			<b>DELETE THE MEETING</b>
		</h1>
	</center>
	<div id="login-box" >
	<center>
		  </br></br>
		<input type="text" name="id" style= "width:600" placeholder="imput the Meeting ID to delete"/></br></br></br>
			<input type="submit" name="submit" value="Delete Meeting" style= width:600/>
			<button><a href="admhome.php">CANCLE</a></button>
		</center>
	</div>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
	{
		
		$id=$_POST["id"];
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		$query="delete from members where id=$id";
		$k=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)==1)
		{
			echo"<script>alert('Your meeting has been successfully deleted')</script>";
			header("Refresh:1; url=admhome.php");
		}
		else
		{
			echo"<Script>alert('incorrect Meeting Id please try again')</script>";
			header("Refresh:1; url=delmeet.php");
		}
	}
				
?>
