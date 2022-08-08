<?php
include("user_check.php");
?>
<html>
<head>
	<link rel="stylesheet" href="style.css"> 
</head>

<body style="background-color:#555555">
	<div>
	<IMG SRC="image.png" style="width:725px; height:100px; margin-left:170px; margin-top:10px">
	</div>	
 
							<?php
								$conn = new PDO('mysql:host=localhost; dbname=project','root', ''); 
								$result = $conn->prepare("SELECT * FROM members ORDER BY id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							<fieldset width="100%">
							<legend style="color:red"><h4>Member ID: <?php echo $row ['id']; ?></h4></legend>
							<table width="100%">
							<tr>
							<td>
								<label style="margin:10px; padding:10px"><b>Name:</b><i><?php echo $row ['fname']; ?> <?php echo $row ['lname'];?> <?php echo $row ['lname']; ?></i> </label></br></br>
								
								<label style="margin:10px; padding:10px"><b>D.O.B:</b> <i><?php echo $row ['DOB'];?></i> </label></br></br>
								<label style="margin:10px; padding:10px"><b>Email:</b> </i><?php echo $row ['email'];?> </i></label></br></br>
								<label style="margin:10px; padding:10px"><b>Mobile:</b> <i><?php echo $row ['mobile'];?> </i></label></br></br>
								<label style="margin:10px; padding:10px"><b>Aadhaar:</b><i> <?php echo $row ['aadhaar'];?></i> </label></br></br>
								<label style="margin:10px; padding:10px"><b>Gender:</b> <i><?php echo $row ['gender'];?> </i></label></br></br>
								<label style="margin:10px; padding:10px"><b>Address:</b><i> <?php echo $row ['address'];?> </i></label></br></br>
								<label style="margin:10px; padding:10px"><b>City:</b><i> <?php echo $row ['city'];?> </i></label></br></br>
								<label style="margin:10px; padding:10px"><b>Pin Code:</b><i> <?php echo $row ['pin'];?></i> </label></br></br>
								<label style="margin:10px; padding:10px"><b>State:</b> <i><?php echo $row ['state'];?></i> </label></br></br>
								<label style="margin:10px; padding:10px"><b>Country:</b><i> <?php echo $row ['country'];?> </i></label></br></br>
								<label style="margin:10px; padding:10px"><b>Hobbies:</b> <i><?php echo $row ['hobbies'];?> </i></label></br></br>
								<label style="margin:10px; padding:10px"><b>Qualification:</b><i> <?php echo $row ['qualification'];?></i> </label></br></br>
								<label style="margin:10px; padding:10px"><b>Interest:</b><i> <?php echo $row ['interest'];?> </i></label></br>
								
								</td>
								<td style="width:200px">
									<?php if($row['img_path'] != ""): ?>
									<img src="uploads/<?php echo $row['img_path']; ?>" width="150px" height="150px">
									<?php else:?>
									<img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
									<?php endif;?>
								</td>
								
							</tr>
                            </table>
							</fieldset></br></br>
						<?php } ?>                        					
</body>
</html>


