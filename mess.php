<?php
if(isset($_POST['submit']))
	{
		
		$name=$_POST["name"];
		$email=$_POST["email"];
		$num=$_POST["num"];
		$text=$_POST["text"];
		
		$conn=mysqli_connect("localhost","root","","sagar") or die(mysqli_error());
		
		$query="INSERT INTO message(name,email,num,text)VALUES('$name','$email','$num','$text')";
		$k=mysqli_query($conn, $query);	
		if(mysqli_affected_rows($conn)==1)
		{
			
		echo"<script>alert('Your Review is successfully added')</script>";
		header("refresh:1, url=index-4.html");
		}
		else
		{
				echo"<script>alert('This Email Is Already Registerd !!!')</script>";
		}
		

	}
				
?>