
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
$sql = "SELECT * FROM `patients` WHERE `patient_id` LIKE '%".$search."%' OR `patient_name` LIKE '%".$search."%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
echo "
<table class='table3' border=1>
<tr>
<th>Patient_ID</th>
<th>Patient NIC</th>
<th>Patient Name</th>
<th>Patient Age</th>
<th>Patient Address</th>
<th>Patient Contact Number</th>
<th>Date of Admission</th>
<th>State of patient</th>
</tr>
";
while($row = mysqli_fetch_assoc($result)) 
{
echo"<br><br>";echo "<tr>
		<td>".$row["patient_id"]."</td>
		<td>".$row["nic"]."</td>
		<td>".$row["patient_name"]."</td>
		<td>".$row["patient_age"]."</td>
		<td>".$row["patient_address"]."</td>
        <td>".$row["patient_contact"]."</td>
        <td>".$row["patient_admission"]."</td>
        <td>".$row["patient_state"]."</td>
		";
}
echo "</table>";
} else {
echo "0 results";
}
}
?>
    </table>
    </td></tr>		
</tr>
                         </table> </center>
