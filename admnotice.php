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
			<input type="date" name="date" style= width:600 required />
		
			<textarea style= width:600 required name="note"></textarea>
			<input type="submit" name="submit" value="Save Notice" style= width:600/>
		</center>
	</div>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
	{
		
		$date=$_POST["date"];
		$note=$_POST["note"];
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		$query="insert into notice(date,note) values('$date','$note')";
		$k=mysqli_query($conn,$query);
		echo "<script>alert('You Are Successfully Inserted')</script>";
		header("Refresh:2; url=admhome.php");
		
	}
				
?>