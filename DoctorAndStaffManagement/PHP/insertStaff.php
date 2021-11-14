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

$id_number = $_POST["id_number"];
$full_name = $_POST["full_name"];
$job_role = $_POST["job_role"];
$age = $_POST["age"];
$home_address = $_POST["home_address"];
$telephone_number = $_POST["telephone_number"];
$duty_shift	 = $_POST["duty_shift"];
$vaccination = $_POST["vaccination"];


$sql="INSERT INTO `staff`(`id_number`,`full_name`,`job_role`,`age`,`home_address`,`telephone_number`,`duty_shift`,`vaccination`	
) 
       VALUES ('".$id_number."','".$full_name."','".$job_role."','".$age ."','".$home_address."','".$telephone_number ."','".$duty_shift."','".$vaccination."')";
        mysqli_query($conn,$sql);
}

header("Location: ../HTML/staff.php?insetion=pass");


?>


