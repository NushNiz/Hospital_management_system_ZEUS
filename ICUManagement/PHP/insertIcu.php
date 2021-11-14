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

$icu_bed_number  = $_POST["icu_bed_number"];
$availability = $_POST["availability"];
$patient_id = $_POST["patient_id"];
$patient_nic = $_POST["patient_nic"];
$address = $_POST["address"];
$contact_number = $_POST["contact_number"];



$sql="INSERT INTO `icu`(`icu_bed_number`,`availability`,`patient_id`,`patient_nic`,`address`,`contact_number`) 
       VALUES ('".$icu_bed_number."','".$availability."','".$patient_id."','".$patient_nic."','".$address."','".$contact_number."')";
        mysqli_query($conn,$sql);
}

header("Location: ../HTML/icu.php?insetion=pass");


?>


