<?php
include("check.php");
?>



<html>
<head>
<title>Registration Form</title>
<link rel="Stylesheet" href="reg.css">
</head>
 
<body style="background-color:#ffffff">
<form id="myForm" action="registration.php" method="POST" enctype="multipart/form-data">
</br></br>
<div>
<center><IMG SRC="join.gif" style="width:725px; height:100px; margin-left:100px; margin-top:10px"></center></br></br>
</div>
<div style="margin-left:50px; width:1000px">
 
	<table align="center" cellpadding = "10" style="background-color:#ffffff; width:100%">
 
<!----- First Name ---------------------------------------------------------->
	<tr>
		<td><label>FIRST NAME :</label></td>
		<td><input type="text" name="fname" id="lname" maxlength="30" style="width:400px" placeholder="max 30 characters a-z and A-Z" required/>

		</td>
	</tr>
 
<!----- Last Name ---------------------------------------------------------->
	<tr>
		<td><label>LAST NAME :</label></td>
		<td><input type="text" name="lname" id="fname" maxlength="30" style="width:400px" placeholder="max 30 characters a-z and A-Z"/>
		</td>
	</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
	<tr>
		<td><label>DATE OF BIRTH :</label></td>
		<td>
			<input type="date" name="DOB" style="width:400px" required/>
		</td>
	</tr>
 
<!----- Email Id ---------------------------------------------------------->
	<tr>
		<td><label>EMAIL ID :</label></td>
			<td><input type="email" name="email" maxlength="100" style="width:400px" required /></td>
	</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
	<tr>
		<td><label>MOBILE NUMBER :</label></td>
		<td>
		<input type="text" name="mobile" maxlength="10" style="width:400px" pattern="^\d{3}\d{3}\d{4}$" required />
		</td>
	</tr>
	<tr>
		<td><label>AADHAAR  NUMBER:</label></td>
		<td>
			<input type="text" name="aadhaar" style="width:400px" maxlength="12" placeholder="Formate: 000000000000" pattern="^\d{4}\d{4}\d{4}$" required />
		</td>
	</tr>
<!----- Gender ----------------------------------------------------------->
	<tr>
		<td><label>GENDER :</label></td>
		<td>
			<input type="radio" name="gender" value="Male" /><label>Male</label> 
			<input type="radio" name="gender" value="Female" style="margin-left:220px"/><label>Female</label>
		</td>
	</tr>
 
<!----- Address ---------------------------------------------------------->
	<tr>
		<td><label>ADDRESS :</label><br /><br /><br /></td>
		<td><textarea name="address" rows="4" cols="30" style="width:400px; height:100"required></textarea></td>
	</tr>
 
<!----- City ---------------------------------------------------------->
	<tr>
		<td><label>CITY:</label></td>
		<td><input type="text" name="city" maxlength="30" style="width:400px" placeholder="max 30 characters a-z and A-Z"/ required>

		</td>
	</tr>
 
<!----- Pin Code ---------------------------------------------------------->
	<tr>
		<td><label>PIN CODE: </label></td>
		<td>
			<input type="text" name="pin" maxlength="6" style="width:400px" placeholder="6 digit number" pattern="^\d{2}\d{2}\d{2}$" required/>
		</td>
	</tr>
 
<!----- State ---------------------------------------------------------->
	<tr>
		<td><label>STATE:</label></td>
		<td>
			<input type="text" name="state" maxlength="30" style="width:400px" placeholder="max 30 characters a-z and A-Z" required/>
		</td>
	</tr>
 
<!----- Country ---------------------------------------------------------->
	<tr>
		<td><label>COUNTRY: </label></td>
		<td><input type="text" name="country" value="India" style="width:400px" readonly="readonly" required /></td>
	</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
	<tr>
		<td> <label>HOBBIES:</label></td>
 
			<td>
				<label>Drawing
					<input type="checkbox" name="hobbies" value="Drawing" />
				Singing
					<input type="checkbox" name="hobbies" value="Singing" />
				Dancing
					<input type="checkbox" name="hobbies" value="Dancing" />
				Sketching
					<input type="checkbox" name="hobbies" value="Cooking" />
				Others</label>
					<input type="checkbox" name="hobbies" value="Other">
				</label>
			</td>
	</tr>

<!----- Qualification---------------------------------------------------------->
	<tr>
	
	
		<td><label>1</label></td>
		<td><label>Class X</label></td>
		<td><input type="checkbox" name="qualification" maxlength="30" value="Matriculation" style="margin-left:-100px"/></td>
	
	</tr>
 
	<tr>
		<td><label>2</label></td>
		<td><label>Class XII</label></td>
		<td><input type="checkbox" name="qualification" maxlength="30" value="XII" style="margin-left:-100px"/></td>
	</tr>
 
	<tr>
		<td><label>3</label></td>
		<td><label>Graduation</label></td>
		<td><input type="checkbox" name="qualification" maxlength="30" value="Graduate"style="margin-left:-100px" /></td>
	</tr>
 
	<tr>
		<td><label>4</label></td>
		<td><label>Masters</label></td>
		<td><input type="checkbox" name="qualification" maxlength="30" value="Masters" style="margin-left:-100px"/></td>
	</tr>

	<tr>
		<td></td>
		<td></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
 

 
<!----- Course ---------------------------------------------------------->
	<tr>
		<td><label>INTERESTED FIELDS</label></td>
		<td>
		<label>
			<input type="radio" name="interest" value="Field _work">
				Field Work
			<input type="radio" name="interest" value="Advertisement">
				Advertisement
			<input type="radio" name="interest" value="Management">
				Management
			<input type="radio" name="interest" value="Other">
				Other
		</label>
		</td>
	</tr>	
	<tr>
		<td><input type="file" name="image" required/></td>
	</tr>
<!----- Submit and Reset ------------------------------------------------->

	<tr>
	</tr><tr>
	</tr>
	<tr>
		<td align="center">
			<input type="submit" value="Submit" name="submit" id="submit">
		</td>
		<td align="center">
			<input type="reset" value="Reset" style="  background: #16a085;">
		</td>

	</tr>

</table>

</form>
 
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$DOB=$_POST["DOB"];
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$aadhaar=$_POST["aadhaar"];
		$gender=$_POST["gender"];
		
		$address=$_POST["address"];
		$city=$_POST["city"];
		$pin=$_POST["pin"];
		$state=$_POST["state"];
		$country=$_POST["country"];
		
		$hobbies=$_POST["hobbies"];
		$qualification=$_POST["qualification"];
		$interest=$_POST["interest"];

		
		/*$filetmp = $_FILES["file_img"]["temp_name"];
		$filename= $_FILES["file_img"]["name"];
		$filetype= $_FILES["file_img"]["type"];
		$filepath = "photo/".$filename;
		move_uploaded_file($filetmp,$filepath);*/
		$conn = new PDO('mysql:host=localhost; dbname=project','root', ''); 
		move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
		$location=$_FILES["image"]["name"];

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		
		$sql="INSERT INTO members(fname, lname, DOB, email, mobile, aadhaar, gender, address, city, pin, state, country, hobbies, qualification, interest, img_path)VALUES('$fname', '$lname', '$DOB', '$email', '$mobile', '$aadhaar', '$gender', '$address', '$city', '$pin', '$state','$country' ,'$hobbies', '$qualification', '$interest', '$location')";
		$conn->exec($sql);
	
			echo "<script>alert('Now you are member of SAATHI')</script>";
			header("refresh:1, url=userhome.php");
		


	}

?>
