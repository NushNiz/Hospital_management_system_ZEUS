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

$sql = "DELETE FROM icu WHERE icu_bed_number='" . $_GET["icu_bed_number"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ../HTML/icu.php?insetion=pass");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>