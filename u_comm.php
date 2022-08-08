<?php
include("user_check.php");
?>
<html>
 <head>
<title>Comments</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

	<FORM method="GET" name="note">

</br></br>

	<table border="1">
		<thead>
			<th>NAME</th>
			<th>Comment</th>
		</thead>	
<?php
$conn=mysqli_connect("localhost","root","","project");
?>
<?php
if(mysqli_connect_errno())
{
exit();
}
$sql="select * from comment";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
	while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
		if(strlen($newArray['comm'])>1)
		{
		echo"<center><tr>
		<td>".$newArray['name']."</td>
		<td>".$newArray['comm']."</td>
		</tr></center>";
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