<?php
include("user_check.php");
?>
<html>
<head>
	
</head>

<body>
<div>
	<IMG SRC="mmber.gif" style="width:725px; height:100px; margin-left:170px; margin-top:10px">
	</div>
	<center>

                        <table border="4px" id="example">
                            <thead>
                                <tr>
                                    <th style="text-align:center;">User Image</th>
                                    <th style="text-align:center;">Name</th>
                                 
									<th style="text-align:center;">Working Field</th>
									
									<th style="text-align:center;">Email</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								$conn = new PDO('mysql:host=localhost; dbname=project','root', ''); 
								$result = $conn->prepare("SELECT * FROM members ORDER BY id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
								<tr>
								<td>
									<?php if($row['img_path'] != ""): ?>
									<img src="uploads/<?php echo $row['img_path']; ?>" width="150px" height="150px">
									<?php else:?>
									<img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
									<?php endif;?>
								</td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <b><?php echo $row ['fname']; ?> <?php echo $row ['lname'];?> </b></td>
								
								<td style="text-align:center; word-break:break-all; width:200px;"><b><?php echo $row ['interest'];?></b></td>
								
								
								<td style="text-align:center; word-break:break-all; width:200px;"><b> <?php echo $row ['email']; ?></b></td>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>  
</center>						

</body>
</html>


