<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Google Website</title>
	<style>
		input{
			width: 500px;
			height: 35px;
			border-radius: 5px;
			border: 1px solid;
		}
		#addbtn{
			width: 100px;
			height: 35px;
			border-radius: 5px;
			border: 1px solid;
			background-color: white;
			color: green;
			font-size: 20px;
		}
		#resetbtn{
			width: 100px;
			height: 35px;
			border-radius: 5px;
			border: 1px solid;
			background-color: white;
			color: red;
			font-size: 20px;
		}	
		#addbtn:hover{
			background-color: green;
			color:white;
		}
		#resetbtn:hover{
			background-color: red;
			color:white;
		}
		#desc{
			width: 500px;
			height: 100px;
			border: 1px solid;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<font size="7"><b><p align="center">Add a Website<p></b></font>
<form action="" method="POST" enctype="multipart/form-data">
	<table border="0" width="55%" align="center" cellspacing="10">
		<tr>
			<td>Website Title</td>
			<td><input type="text" name="websitetitle"></td>
		</tr>
		<tr>
			<td>Website Link</td>
			<td><input type="text" name="websitelink"></td>
		</tr>
		<tr>
			<td>Website Keywords</td>
			<td><input type="text" name="websitekeywords"></td>
		</tr>
		<tr>
			<td>Website Description</td>
			<td><textarea type="text" name="websitedescription" id="desc"></textarea></td>
		</tr>
		<tr>
			<td>Website Image</td>
			<td><input type="file" name="uploadfile"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="addwebsite" value="Submit" id="addbtn">
				&nbsp &nbsp
			<input type="reset" name="reset" id="resetbtn">
			</td>
		</tr>
	</table>
	

</form>
</body>
</html>

<?php
include("connection.php");
if($_POST['addwebsite']){
	$website_title=$_POST['websitetitle'];
	$website_link=$_POST['websitelink'];
	$website_keyword=$_POST['websitekeywords'];
	$website_description=$_POST['websitedescription'];
	$filename=$_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];

	$folder = "website_images/".$filename;
	move_uploaded_file($tempname, $folder);

	if($website_title!="" && $website_link!="" && $website_keyword!=""&& $website_description!="" && $filename!=""){
		$query="INSERT INTO add_website values ('$website_title','$website_link','$website_keyword','$website_description','$folder')";

		$data = mysqli_query($conn,$query);

		if($data){
			echo "<script>alert('Website inserted')</script>";
		}
		else{
			echo "<script>alert('Failed')</script>";
		}
	}

}
?>