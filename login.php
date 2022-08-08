
<?php
		session_start();
		$con=mysqli_connect("localhost","root","","project") or die(mysqli_error());
	?>
<?php
		if(isset($_POST['submit']))
		{	
			$email=$_POST['email'];
			$password=$_POST['password'];
			if(empty($email) or empty($password))
			{
				echo"<script>alert('Fill all the fields')</script>";
				header("Refresh:1;url=login1.php");
				exit();
			}
			else
			{
				$email=$_POST['email'];
				$password=$_POST['password'];
				$email = stripslashes($email);
				$password=stripcslashes($password);
				$email = mysqli_real_escape_string($con, $email);
				$password= mysqli_real_escape_string($con, $password);
				
			
				$query="SELECT * FROM signup WHERE email='$email' AND password='$password'";
				$r=mysqli_query($con, $query);
					if(mysqli_affected_rows($con)==1)
					{
						$_SESSION['email']= $email;
						header("location:userhome.php");
					}
					else
					{
						echo"<script>alert('!!User Name or Password Not Matched!!')</script>";
						header("Refresh:1; url=login1.php");
					}
			}
		}
?>