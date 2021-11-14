<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="zeus";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if($conn->connect_error)
	{
		die("connection faild:" . $conn->connect_error);
	}

	echo "connect successfully";
	?>


?>