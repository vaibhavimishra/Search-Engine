<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "google_new";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn){
	// echo "Connection Success";
}
else{
	die("Connection Failed".mysql_connect_error());
}
?>