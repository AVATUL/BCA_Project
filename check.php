<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error());
session_start();
$user_check=$_SESSION['email'];
$query="select email from admin where email='$user_check'";

$result=mysqli_query($con,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$email=$row['email'];
if(!isset($user_check))
{
	header("Location: admlogin.php");
}
?>