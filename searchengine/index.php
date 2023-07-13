<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Google Website</title>
	<style>
		input{
			width: 700px;
			height:35px;
			border-radius: 50px;
			border: 1px solid;
		}
		#searchbtn{
			width: 130px;
			height: 40px;
			border-radius: 50px;
			border: 1px solid blue;
			color: blue;
			font-size: 18px;
			background-color: white;
		}
		#searchbtn:hover{
			background-color: blue;
			color: white;
		}
	</style>
</head>
<body>
	<br><br><br>
	<center><img src="logo.png" width="30%"></center>
	
	<form action="result.php" method="GET">
	
	<br>
	<center><input type="text" name="searchbar"></center>
	<br>
	<center><input type="submit" name="searchbtn" value="Search" id="searchbtn"></center>
	</form>
</body>
</html>