<?php
include("user_check.php");
?>
<html>
 <head>
<title>Meeting Details</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#edd2ff")>

	<FORM method="GET" name="donate">

</br>
	<h3><center><b><u>DONATIONS</b></u></center></h3>
	
	<table border="1">
	<thead>
	<th><u>ID</u></th>
	<th><u>NAME</u></th>
	<th><u>ADDRESS</u></th>
	<th><u>MOBILE_NO.</u></th>
	<th><u>EMAIL</u></th>
	<th><u>NOTE</u></th>
	<th><u>AMOUNT</u></th>

	</thead>
<?php
$conn=mysqli_connect("localhost","root","","project");
?>
<?php
if(mysqli_connect_errno())
{
exit();
}
$sql="select * from donate";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
	while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
		if(strlen($newArray['fname'])>1)
		{
		echo"<tr>
		<td>".$newArray['id'].")</td>
		<td>".$newArray['fname']."
		".$newArray['lname']."</td>
		<td>".$newArray['address']."</td>
		<td>".$newArray['phone']."</td>
		<td>".$newArray['email']."</td>
		<td>".$newArray['note']."</td>
		<td>".$newArray['amount']."</td>
		</tr>";
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