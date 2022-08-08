<?php
include("user_check.php");
?>
<html>
 <head>
<title>Meeting Details</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#edd2ff")>

	<FORM method="GET" name="note">

<div>
	<center><h1 style="font-size:42px"><u><b>Meetings</b></h1></u></center>
	</div>	

<?php
$conn=mysqli_connect("localhost","root","","project");
?>
<?php
if(mysqli_connect_errno())
{
exit();
}
$sql="select * from meeting";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
	while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
		if(strlen($newArray['place'])>1)
		{
		echo"<fieldset>
		<legend>Meeting ID: ".$newArray['id']."</legend>
		<h4>Meeting Date: ".$newArray['date']."</h4>
		<h4>Meeting Place:  ".$newArray['place']."</h4>
		<h5 style='margin-left:10px; margin-right:10px'>".$newArray['agenda']."</h5>
		<h5>BY Admin</h5></fieldset></br></br>";
		}
	}
}
else{
echo "No Data Found!!";
}
?>
</table>

</form>
</body>
</html>