<?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $db = "zeus";
   //connect to the database
   $conn = mysqli_connect($host,$user,$password,$db);

   if($conn->connect_error)
	{
		die("connection faild:" . $conn->connect_error);
	}



if( isset( $_POST['submit'])) {

$nic = $_POST["nic"];
$name = $_POST["name"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$brand = $_POST["brand"];
$first_dose_date = $_POST["first_dose_date"];
$second_dose_date	 = $_POST["second_dose_date"];
$price = $_POST["price"];


$sql="INSERT INTO `testing`(`nic`,`name`,`address`,`contact`,`brand`,`first_dose_date`,`second_dose_date`,`price`) 
       VALUES ('".$nic."','".$name."','".$address."','".$contact."','".$brand."','".$first_dose_date."','".$second_dose_date."','".$price."')";
        mysqli_query($conn,$sql);
}

header("Location: ../HTML/testing.php?insetion=pass");


?>


