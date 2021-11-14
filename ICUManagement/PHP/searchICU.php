<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>


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
if( isset( $_POST['search']))
 {
$search = $_POST["search"]; 
$sql = "SELECT * FROM `icu` WHERE `patient_id` LIKE '%".$search."%' OR `icu_bed_number` LIKE '%".$search."%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
echo "
<div class='well'>
<table class='table-info' border=1>
<tr>
<td>ICU Bed Number</td>
                        <td>Availability</td>
                        <td>Patient ID</td>
                        <td>Patient NIC</td>
                        <td>Address</td>
                        <td>Contact Number</td>
</tr>
";
while($row = mysqli_fetch_assoc($result)) 
{
echo"<br><br>";echo "<tr>
		<td>".$row["icu_bed_number"]."</td>
		<td>".$row["availability"]."</td>
		<td>".$row["patient_id"]."</td>
		<td>".$row["patient_nic"]."</td>
		<td>".$row["address"]."</td>
        <td>".$row["contact_number"]."</td>
        
		";
}
echo "</div></table>";
} else {
echo "0 results";
}
}
?>
    </table>
    </td></tr>		
</tr>
                         </table> </center>
                         </body>

</html>