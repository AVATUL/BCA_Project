<?php
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message']))
{
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['message']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		//if(filter_var($email, Filter_VALIDATE_EMAIL)===false)
		//{
			//echo"<script>alert('!!Kindly Provide Valide Email ID!!')</script>";
		//}
		//else
		//{
			$body = $fname."\n".$lname."\n".$email."\n".$message;
			if(mail('saathiekkadam@gmail.com','Website Response',$body,'From:Response@mywebsite.com'))
			{
				echo"<script>alert('!!Thank You for contecting Us...!!')</script>";
				
			}
			else
			{
				echo"<script>alert('!!There is problem in sending email...!!')</script>";
			}
		//}
	}
	else
	{
		echo"<script>alert('!!All Fields Are Required!!')</script>";
	}
}
else
{
	echo"<script>alert('!!NOT OK !!!')</script>";
}

?>