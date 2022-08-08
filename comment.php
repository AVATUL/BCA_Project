<?php
if(isset($_POST['submit']))
	{
		$name=$_POST["name"];
		$date=$_POST["date"];
		$comm=$_POST["comm"];
		
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		
		$query="INSERT INTO comment(name,date,comm)VALUES('$name','$date','$comm')";
		$k=mysqli_query($conn,$query);	
		if(mysqli_affected_rows($conn)==1)
		{	
		echo"<script>alert('You comment is Successfully Added')</script>";
		header("refresh:1, url=userhome.php");
		}
		else
		{
				echo"<script>alert('Try Again!!!')</script>";
				header("refresh:1, url=userhome.php");
		}
		
	}
				
?>