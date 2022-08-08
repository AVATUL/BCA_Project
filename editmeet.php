<?php
include("check.php");
?>
<html>
<head>
<title>LogIn page</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url(login.jpeg")>
<?php
?>
<form name="admnotice" method="post">
	<img src="assets/images/logo.png" alt="">
	<center>
		<h1 style="color:white;">
		<br>
			<b>ADD NEW NOTIFICATION</b>
		</h1>
	</center>
	<div id="login-box" >
	<center>
		  </br></br>
			<input type="text" name="id" placeholder="Notice ID" style= width:600>
			<input type="date" name="date " style="width:600" required/>
		
			<input type="text" name="place" placeholder="New Place*" style="width:600" required/>
			<input type="submit" name="submit" value="MODIFY" style= width:600/>
		</center>
	</div>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
	{
		$id=$_POST["id"];
		$date=$_POST["date"];
		$place=$_POST["place"];
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		$query="update meeting set date='$date', place='$place' where id='$id'";
		$k=mysqli_query($conn,$query);
		echo "<script>alert('You Are Successfully UPDATED')</script>";
		header("Refresh:2; url=admhome.php");
		
	}
				
?>