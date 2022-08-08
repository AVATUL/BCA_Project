<?php
include("user_check.php");
?>
<html>
 <head>
<title>Notice</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#edd2ff">

	<FORM method="GET" name="note">

<div>
<center><IMG SRC="reminder.gif" style="width:300px; height:100px;margin-top:10px"></center>
</div>
<?php
$conn=mysqli_connect("localhost","root","","project");
?>
<?php
if(mysqli_connect_errno())
{
exit();
}
$sql="select * from notice";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
	while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
		if(strlen($newArray['note'])>1){
		echo"<fieldset>
		<legend>Notice Number: ".$newArray['id']."</legend></br>
		<h4>Notice Date: ".$newArray['date']."</h4>
		<h5 style='margin-left:10px; margin-right:10px'>".$newArray['note']."</h5>
		 <h5>By:  Admin </h5></fieldset> </br></br>";
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
