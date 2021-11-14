
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
                                            }?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link res="stylesheet" href="adminDash.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="footer.css">
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
    #dashco{
      background-color: #ADD8E6;
      text-align: center;
      font-weight:bold;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
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
        <li class="active"><a href="adminDash.html">Dashboard</a></li>
        <li><a href="../DoctorAndStaffManagement/HTML/staff.php">Doctor and staff Management</a></li>
        <li><a href="../PatientManagement/HTML/patient.php">Patient management</a></li>
        <li><a href="../ICUManagement/HTML/icu.php">ICU management</a></li>
        <li><a href="../CovidTestingAndVaccination/HTML/testing.php">Covid vaccination</a></li>
        <li><a href="../EquipmentManagement/HTML/stock.php">Stock management</a></li>
        <li><a href="../Appointment/Appoint.php">Appointments</a></li>
        <li><a href="../HomePage/HomePage.html">ZEUS Home Page</a></li>
        <li><a href="../loginPage/login.html">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>ZEUS Hospitals</h2>
      <img  style="width:150px; height:150px ;margin-top:-43px ;"  src="../HomePage/images/NavLogo.png">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="adminDash.html">Dashboard</a></li>
        <li><a href="../DoctorAndStaffManagement/HTML/staff.php">Doctor and staff Management</a></li>
        <li><a href="../PatientManagement/HTML/patient.php">Patient management</a></li>
        <li><a href="../ICUManagement/HTML/icu.php">ICU management</a></li>
        <li><a href="../CovidTestingAndVaccination/HTML/testing.php">Covid  vaccination</a></li>
        <li><a href="../EquipmentManagement/HTML/stock.php">Stock management</a></li>
        <li><a href="../Appointment/Appoint.php">Appointments</a></li>
        <li><a href="../HomePage/HomePage.html">ZEUS Home Page</a></li>
        <li><a href="../loginPage/login.html">Logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well" id="dashco">
        <h4>ZEUS Admin Dashboard</h4>
        <p>Summary</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well" >
            <h4 style="text-align:center;">PATIENTS</h4><br>
            <?php
                $conn = new mysqli($host,$user,$password,$db);
                $sql = "SELECT * FROM patients";
                if ($result=mysqli_query($conn,$sql)) {
                $rowcount=mysqli_num_rows($result);
                 echo "Total Number Of Patients : ".$rowcount;   

              }?> <br>

              <?php
                    $conn = new mysqli($host,$user,$password,$db);
                    $sql1 = "SELECT * FROM patients where patient_state = 'critical' ";
                    if ($result=mysqli_query($conn,$sql1)) {
                      $rowcount1=mysqli_num_rows($result);
                       echo"<hr>";
                       echo "<p style='color:red;font-size:15px;'>Number Of Critical Patients  $rowcount1</p> "; 
                    }
                ?>





          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4 style="text-align:center;">STAFF</h4><br>
            <?php
                $conn = new mysqli($host,$user,$password,$db);
                $sql = "SELECT * FROM staff";
                if ($result=mysqli_query($conn,$sql)) {
                $rowcount=mysqli_num_rows($result);
                 echo "Total Number Of Staffs : ".$rowcount; 
                }?>
                <br/>
                <?php
                 $sql1 = "SELECT * FROM staff where vaccination='vaccinated'";
                 if ($result1=mysqli_query($conn,$sql1)) {
                 $rowcount1=mysqli_num_rows($result1);
                  echo "Total Number Of vaccinated Staffs: ".$rowcount1; 
              }?>
          </div>
        </div>




        <div class="col-sm-3">
          <div class="well">
            <h4 style="text-align:center;"> VACCINATION CASES</h4><br>
            <?php
                $conn = new mysqli($host,$user,$password,$db);
                $sql = "SELECT * FROM testing";
                if ($result=mysqli_query($conn,$sql)) {
                $rowcount=mysqli_num_rows($result);
                 echo "Total Number Of tests : ".$rowcount; 
              }?>
          </div>
        </div>






        <div class="col-sm-3">
          <div class="well">
            <h4 style="text-align:center;">ICU BEDS</h4><br>
            <?php
                $conn = new mysqli($host,$user,$password,$db);
                $sql = "SELECT * FROM icu";
                if ($result=mysqli_query($conn,$sql)) {
                $rowcount=mysqli_num_rows($result);
                $count=15- $rowcount;
                if($count < 10){
                  echo "<p style='color:red;font-size:20px;'>Bed count is less than 10 ! <br></p> ";
                }
                 echo "Total Number Of Beds available: ".$count; 
              }?>
          </div>
        </div>
      </div>


      
      <div class="col-sm-3">
          <div class="well">
            <h4 style="text-align:center;"> STOCKS</h4><br>
            <?php
                $conn = new mysqli($host,$user,$password,$db);
                $sql1 = "SELECT quantity FROM stock where category = 'Oxygen Bottles'  ";
                $result = $conn->query($sql1);
                while($row = $result->fetch_assoc()) {
                 echo "<p style='text-align:center;'><h4>Oxygen Bottles in Stock  :</h4> <hr> " .$row["quantity"]. "</p><br>";
               }
              ?>
          </div>
        </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="well"><br>
          <?php
                 $sql1 = "SELECT full_name FROM staff where id_number='DRIC' and job_role='doctor' ";
                 $result = $conn->query($sql1);
                 while($row = $result->fetch_assoc()) {
                  echo "DOCTOR IN CHARGE  : <br><hr> " . $row["full_name"]. "<br>";
                }
                  
              ?><br><br>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
          <?php
                echo "DAY SHIFT <br> <hr>";
                $sql1 = "SELECT full_name FROM staff where duty_shift='day' ";
                $result = $conn->query($sql1);
                while($row = $result->fetch_assoc()) {
                 echo "Name  : " . $row["full_name"]. "<br>";
               }
                 
             ?>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
          <?php
                echo "NIGHT SHIFT <br> <hr>";
                $sql1 = "SELECT full_name FROM staff where duty_shift='night' ";
                $result = $conn->query($sql1);
                while($row = $result->fetch_assoc()) {
                 echo "Name  : " . $row["full_name"]. "<br>";
               }
                 
             ?>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
 <!-- footer Bar -->

 <footer class="footer-distributed">
  
  <div class="footer-left">
  
  <h3>Zeus<span>Hospitals</span></h3>
  
  <p class="footer-links">
  <a href="../HomePage/HomePage.html">Home</a>
  <br>
  <a href="#">Contact : 045 - 2222 232 </a>
  </p>
  
  <p class="footer-company-name">ZeusHospitals &copy; 2021</p>
  </div>
  
  <div class="footer-center">
  
  <div>
  <i class="fa fa-map-marker"></i>
  <p><span>34th Street</span> Colombo, Sri Lanka</p>
  </div>
  
  <div>
  <i class="fa fa-phone"></i>
  <p>045 - 2222 232</p>
  </div>
  
  <div>
  <i class="fa fa-envelope"></i>
  <p><a href="#">contact@zeushospitals.com</a></p>
  </div>
  
  </div>
  
  <div class="footer-right">
  
  <p class="footer-company-about">
  <span>About the company</span>
  put abutus here
  </p>
  
  <div class="footer-icons">
  
  <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
  <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
  <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a>
  <a href="www.github.com"><i class="fa fa-github"></i></a>
  
  </div>
  
  </div>
  
  </footer>
</body>
</html>
