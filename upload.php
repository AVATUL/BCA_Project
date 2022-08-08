<?php
if($_FILES['file']['size']>0)
{
	if($_FILE['file']['size']<=153600)
	{
		if(move_uploaded_file($_FILE['file']['tmp_name'],"images/".$_FILES['file']["name"]))
		{
		?>
		<script type="text/javascript">
		parent.document.getElementById("message").innerHtml="";
		parent.document.getElementById("file").value="";
		window.parent.updatepicture("<?php echo'image/'.$_FILES['file']['name']; ?>");
		</script>
		<?php
		}
		else
		{
			<script type="text/javascript">
			parent.document.getElementById("message").innerHTML="<font color='#ff0000'>There is an arror in uploading the file.</font>";
			</script> 
		}
		
	}
	else
	{
		<script type="text/javascript">
			parent.document.getElementById("message").innerHTML="<font color='#ff0000'>your image is bigger then 150 byte.</font>";
			</script> 
	}
}
?>