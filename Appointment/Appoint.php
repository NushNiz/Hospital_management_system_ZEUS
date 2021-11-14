<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>ZEUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link res="stylesheet" href="../../AdminDashboard/adminDash.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }

    th, td {
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
    background-color:  #3786bd;
    color: white;
    }

    .btndele{
      background-color: red;
      border-radius:8px;
      padding:5px;
      color:white;
      
    }

    .btnedit{
      background-color: yellow;
      border-radius:8px;
      padding:5px;
      color:white;
    }

    .btncreate{
      background-color: green;
      border-radius:8px;
      padding:5px;
      color:white;
    }
    #dashco{
      background-color: #ADD8E6;
      text-align: center;
      font-weight:bold;
    }
  </style>


</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li ><a href="../AdminDashboard/adminDash.php">Dashboard</a></li>
        <li ><a href="../DoctorAndStaffManagement/HTML/staff.php">Doctor and staff Management</a></li>
        <li ><a href="#">Patient management</a></li>
        <li ><a href="../ICUManagement/HTML/icu.php">ICU management</a></li>
        <li ><a href="../CovidTestingAndVaccination/HTML/testing.php">Covid vaccination</a></li>
        <li ><a href="../EquipmentManagement/HTML/stock.php">Stock management</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>ZEUS Hospitals</h2>
      <img  style="width:150px; height:150px ;"  src="../HomePage/Images/NavLogo.png">
      <ul class="nav nav-pills nav-stacked">
      <li ><a href="../AdminDashboard/adminDash.php">Dashboard</a></li>
        <li ><a href="../DoctorAndStaffManagement/HTML/staff.php">Doctor and staff Management</a></li>
        <li ><a href="#">Patient management</a></li>
        <li ><a href="../ICUManagement/HTML/icu.php">ICU management</a></li>
        <li ><a href="../CovidTestingAndVaccination/HTML/testing.php">Covid vaccination</a></li>
        <li ><a href="../EquipmentManagement/HTML/stock.php">Stock management</a></li>
      </ul><br>
    </div>
    <br>
  
    <div>
   
<div class="col-sm-9" >
<div class="well">
        <table>
            <tr>
                <td> <div class="well" id="dashco">
            <h3 class="empal">PATIENT INFO</h3>
            <!--search-->
            <div>
            <form class="form-inline" method="POST" action=""><input type="text" 
            name="search" class="form-control" placeholder="Search..">
            <button type="submit" name="save" class="btn btn-primary">Search</button></form>
            
            </div>
            </div>
            <div>

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
$sql = "SELECT * FROM `appointment` WHERE `nic` LIKE '%".$search."%'  OR `doctor_name` LIKE '%".$search."%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
echo "
<table class='table3' border=1>
<tr>
<th>Name</th>
<th>NIC</th>
<th>Contact Number</th>
<th>Date</th>
<th>Time</th>
<th>Doctor Name</th>

</tr>
";
while($row = mysqli_fetch_assoc($result)) 
{
echo"<br><br>";echo "<tr>
		<td>".$row["name"]."</td>
		<td>".$row["nic"]."</td>
		<td>".$row["contct_no"]."</td>
		<td>".$row["date"]."</td>
		<td>".$row["time"]."</td>
        <td>".$row["doctor_name"]."</td>
        
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
      </div>
            <br>
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

              $result = mysqli_query($conn,"SELECT * FROM appointment");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>

                    <table>
                        <tr>
                          <td>Name</td>
                        <td> NIC</td>
                        <td>Contact Number</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Doctor Name</td>
                        
                        </tr>
                          <?php
                          $i=0;
                          while($row = mysqli_fetch_array($result)) {
                          ?>
                        <tr>
                          <td><?php echo $row["name"]; ?></td>
                          <td><?php echo $row["nic"]; ?></td>
                          <td><?php echo $row["contct_no"]; ?></td>
                          <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["time"]; ?></td>
                        <td><?php echo $row["doctor_name"]; ?></td>
                     
                          </tr>
                          <?php
                          $i++;
                          }
                          ?>
                    </table>
                    <?php
                      }
                      else
                      {
                          echo "No result found";
                      }
                      ?>



    </div>
  </div>
</div>
    
</body>
</html>
