<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<style>
		#searchfield{
			width: 500px;
			height: 35px;
			border-radius: 5px;
			border: 1px solid;
		}
		#gobtn{
			width: 100px;
			height: 39px;
			border-radius: 5px;
			border: 1px solid;
			background-color: white;
			font-size: 17px;
		}
		#gobtn:hover{
			background-color: green;
			color: white;
		}
	</style>
</head>
<body>
	<form action="" method="GET">
		<table border="0" width="100%" bgcolor="f2f2f2">
			<tr>
				<td width="10%">
					<a href="index.php"><img src="logo3.jpg" width="100%"></a>
				</td>
				<td>
					<input type="text" name="" id="searchfield">
					<input type="submit" name="" value="Search" id="gobtn">
				</td>
			</tr>
		</table>

<table border="0" style="margin-left: 100px ">
	<tr>
<?php
include("connection.php");
if(isset($_GET['searchbtn'])){
	$search=$_GET['searchbar'];
	if($search==""){
		echo "Please write something in search box";
		exit();
	}
	
	$query="select * from add_website where website_keywords like '%$search%' limit 0,4";
	$data=mysqli_query($conn,$query);

	if(mysqli_num_rows($data)<1){
		echo "No result found";
		exit();
	}
	echo "<a href='#' style='margin-left:105px;'>More Images for $search</a>";
	while($row = mysqli_fetch_array($data)){
		echo "
			<td>
			<img width='200px' height='160px' src='$row[4]' width='200px;'>
			</td>
		";
	}
}
?>
</tr>		
	</form>
	<?php include("finalsearch.php")

	?>
</body>
</html>