<!DOCTYPE html>
<html>
<head>
<title>LogIn and signup page</title>
<script>
function validateForm() 
	{
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}

</script>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url(signup.jpg")>

<form name="myForm" method="post" onsubmit="validateForm();">
<center>
<br>
<h1><b> Sign Up </b></h1>
</center>
<div id="login-box">
  <img src="assets/images/logo.png" alt="">
  <div class="left">
  <br> <br>
    
    <input type="text" name="fname" placeholder="First Name *" required/>
	<input type="text" name="lname" placeholder="Last Name " />
	<input type="text" name="aadhar" placeholder="Aadhar number *" maxlength="12" pattern="^\d{4}\d{4}\d{4}$" required/>
	<label>Sex:</label><br>
	<h2><input type="Radio" name="gender" value="male" />Male 
	<input type="Radio" name="gender" value="Female"/>Female
	<input type="Radio" name="gender" value="Other"/>Other</h2>
  </div>
  
  <div class="right1">
  <br>
   <input type="text" name="phone" placeholder="Enter your phone number" maxlength="10" pattern="^\d{3}\d{3}\d{4}$"required/>
    <input type="email" name="email" placeholder="E-mail" required/>
    <input type="password" name="password" placeholder="Password" required/>
    
    <input type="submit" name="submit" value="Sign me up" />
  </div>

  
</div>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
	{
		
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$aadhar=$_POST["aadhar"];
		$gender=$_POST["gender"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		
		$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
		
		$query="INSERT INTO signup(fname,lname,aadhar,gender,phone,email,password)VALUES('$fname','$lname','$aadhar','$gender','$phone','$email','$password')";
		$k=mysqli_query($conn, $query);	
		if(mysqli_affected_rows($conn)==1)
		{
			
		echo"<script>alert('You Are Successfully Registered')</script>";
		header("refresh:1, url=login1.php");
		}
		else
		{
				echo"<script>alert('This Email Is Already Registerd !!!')</script>";
		}
		

	}
				
?>