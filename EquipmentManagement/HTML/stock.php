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
      <li ><a href="../../AdminDashboard/adminDash.php">Dashboard</a></li>
        <li ><a href="../../DoctorAndStaffManagement/HTML/staff.php">Doctor and staff Management</a></li>
        <li><a href="../../PatientManagement/HTML/patient.php">Patient management</a></li>
        <li><a href="../../ICUManagement/HTML/icu.php">ICU management</a></li>
        <li ><a href="../../CovidTestingAndVaccination/HTML/testing.php">Covid  vaccination</a></li>
        <li class="active"><a href="#">Stock management</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>ZEUS Hospitals</h2>
      <img  style="width:150px; height:150px ;"  src="../../HomePage/Images/NavLogo.png">
      <ul class="nav nav-pills nav-stacked">
      <li ><a href="../../AdminDashboard/adminDash.php">Dashboard</a></li>
        <li ><a href="../../DoctorAndStaffManagement/HTML/staff.php">Doctor and staff Management</a></li>
        <li><a href="../../PatientManagement/HTML/patient.php">Patient management</a></li>
        <li><a href="../../ICUManagement/HTML/icu.php">ICU management</a></li>
        <li ><a href="../../CovidTestingAndVaccination/HTML/testing.php">Covid vaccination</a></li>
        <li class="active"><a href="#">Stock management</a></li>
      </ul><br>
    </div>
    <br>
  
    <div>
   
<div class="col-sm-9" >
<div class="well">
        <table>
            <tr>
                <td>
                <div class="well" id="dashco">
            <h3 class="empal">STOCK INFO</h3>
         
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
$sql = "SELECT * FROM `stock` WHERE `id` LIKE '%".$search."%'
OR `category` LIKE '%".$search."%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
echo "
<table class='table3' border=1>
<tr>
<th>Stock_ID</th>
<th>Stock_Name</th>
<th>category</th>
<th>Stock_Brand</th>
<th>Stock_Quantity</th>
</tr>
";
while($row = mysqli_fetch_assoc($result)) 
{
echo"<br><br>";echo "<tr>
<td>".$row["id"]."</td>
<td>".$row["name"]."</td>
<td>".$row["category"]."</td>
<td>".$row["brand"]."</td>
<td>".$row["quantity"]."</td>

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

              $result = mysqli_query($conn,"SELECT * FROM stock");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>

                    <table>
                        <tr>
                          <td>Item Number</td>
                        <td>Name</td>
                        <td>Category</td>
                        <td>Brand</td>
                        <td>Quantity</td>
                       
                        </tr>
                          <?php
                          $i=0;
                          while($row = mysqli_fetch_array($result)) {
                          ?>
                        <tr>
                          <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["name"]; ?></td>
                          <td><?php echo $row["category"]; ?></td>
                          <td><?php echo $row["brand"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                    
                        <td><a href="../PHP/updateStock.php?id=<?php echo $row["id"]; ?>">Update</a>
                        <a href="../PHP/deleteStock.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
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
<button class="btncreate">  <a style="text-decoration:none; color:white;" href="../HTML/addStock.html"> Add Stock Record</a>


    </div>
  </div>
</div>
    
</body>
</html>
