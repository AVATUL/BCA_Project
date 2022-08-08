<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error());
session_start();
$user_check=$_SESSION['email'];
$query="select email from signup where email='$user_check'";

$result=mysqli_query($con,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$email=$row['email'];
if(!isset($user_check))
{
	header("Location: login1.php");
}

function users_profile($email)/*Showing through upper SESSION['email']=$email*/
	{
		$query=$this->conn->query("select * from user where email='$email'");
		$row=$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$this->data[]=$row;
		}
		return $this->data;
	}


?>