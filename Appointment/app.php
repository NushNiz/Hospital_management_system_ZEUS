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

$name = $_POST["name"];
$nic = $_POST["nic"];
$contct_no = $_POST["contct_no"];
$date = $_POST["date"];
$time = $_POST["time"];
$doctor_name = $_POST["doctor_name"];



$sql="INSERT INTO `appointment`(`name`,`nic`,`contct_no`,`date`,`time`,`doctor_name`) 
       VALUES ('".$name."','".$nic."','".$contct_no."','".$date."','".$time."','".$doctor_name."')";
        mysqli_query($conn,$sql);
}

//alert "We Will Call You To Confirm Your Appointment";


?>


