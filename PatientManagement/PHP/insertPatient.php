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

$patient_id = $_POST["patient_id"];
$patient_nic = $_POST["patient_nic"];
$patient_name = $_POST["patient_name"];
$patient_age = $_POST["patient_age"];
$patient_address = $_POST["patient_address"];
$patient_contact = $_POST["patient_cno"];
$patient_admission	 = $_POST["patient_dof"];
$patient_state = $_POST["State_of_patient"];


$sql="INSERT INTO `patients`(`patient_id`,`nic`,`patient_name`,`patient_age`,`patient_address`,`patient_contact`,`patient_admission`,`patient_state`) 
       VALUES ('".$patient_id."','".$patient_nic."','".$patient_name."','".$patient_age."','".$patient_address."','".$patient_contact."','".$patient_admission."','".$patient_state."')";
        mysqli_query($conn,$sql);
}

header("Location: ../HTML/patient.php?insetion=pass");


?>


