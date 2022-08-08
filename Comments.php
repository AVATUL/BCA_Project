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
	<h1><center><b><u>COMMENTS</b></u></center></h1>
	<table border="1">
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>Date</th>
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
		echo"<tr>
		<td>".$newArray['id']."</td>
		<td>".$newArray['name']."</td>
		<td>".$newArray['date']."</td>
		<td>".$newArray['comm']."</td>
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