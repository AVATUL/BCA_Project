<?php
include("check.php");
?>
<html>
<head>
<title>LogIn page</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url(login.jpeg")>
<form name="adm" method="post"/>
	<img src="assets/images/logo.png" alt="">
	<center>
		<h1 style="color:white;">
		<br>
			<b>ADD MEETING NOTIFICATION</b>
		</h1>
	</center>
	<div id="login-box" >
	<center>
		  </br></br>
			<input type="date" name="date" style= width:600 required />
			<input type="text" name="place" placeholder="Place Of Meeting"/ required style= width:600 required>
			<textarea style= width:600 placeholder="Enter the agenda of your meeting...." name="agenda" required></textarea>
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
		$place=$_POST["place"];
		$agenda=$_POST["agenda"];
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		$query="insert into meeting(date,place,agenda) values('$date','$place','$agenda')";
		$k=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)==1)
		{
			echo "<script>alert('You Are Successfully Inserted')</script>";
			header("Refresh:2; url=admhome.php");
		}
		else
		{
			echo "<script>alert('Some problem occured <STRONG>TRY AGAIN!! </STRONG>')</script>";
		}
		
		
	}
				
?>