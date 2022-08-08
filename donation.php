<?php
if(isset($_POST['submit']))
	{
		$amount=$_POST["amount"];
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$note=$_POST["note"];
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		
		$query="INSERT INTO donate(amount,fname,lname,email,phone,address,note)VALUES('$amount', '$fname', '$lname', '$email', '$phone', '$address', '$note')";
		$k=mysqli_query($conn, $query);	
		if(mysqli_affected_rows($conn)==1)
		{
			
		echo"<script>alert('Thank you for your donation')</script>";
		header("refresh:1, url=login1.php");
		}
		else
		{
				echo"<script>alert('Try Again')</script>";
		}
		

	}
				
?>