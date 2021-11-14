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


 if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE staff set id_number='" . $_POST['id_number'] . "', 
                                            full_name='" . $_POST['full_name'] . "', 
                                            job_role='" . $_POST['job_role'] . "', 
                                            age='" . $_POST['age'] . "' ,
                                            home_address='" . $_POST['home_address'] . "',
                                            telephone_number='" . $_POST['telephone_number'] . "', 
                                            duty_shift='" . $_POST['duty_shift'] . "' ,
                                            vaccination='" . $_POST['vaccination'] . "'

                                             WHERE id_number='" . $_POST['id_number'] . "'");
                        $message = "Record Modified Successfully";
                        header("Location: ../HTML/staff.php?insetion=pass");
    }

    $result = mysqli_query($conn,"SELECT * FROM staff WHERE id_number='" . $_GET['id_number'] . "'");
    $row= mysqli_fetch_array($result);
    ?>


 <html>
    <head>
    <title>Update Staff Data</title>
    <meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../css/AddStaff.css"/>
    </head>
    <body>

    <div class="page-content">
		<div class="form-v4-content">
    <form  method="POST" action="" class="form-detail" id="myform">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    <!--<a href="retrieve.php">Employee List</a>-->
    </div>
    <h2>STAFF EDIT FORM</h2>
  
    
    <div class="form-row">
						<label for="id_number">ID Number</label>
						<input type="text" name="id_number" id="id_number" class="input-text" value="<?php echo $row['id_number'];?>" readonly>
					</div>
					<div class="form-row">
						<label for="full_name">Full Name</label>
						<input type="text" name="full_name" id="full_name" class="input-text" value="<?php echo $row['full_name'];?>" >
					</div>
				
				<div class="form-row">
					<label for="job_role">Job Role</label>
					<select id="job_role" name="job_role" value="<?php echo $row['job_role'];?>">
						<option value="doctor">Doctor</option>
						<option value="nurse">Nurse</option>
						<option value="attendent">Attendent</option>
						
					  </select>
				</div>

                <div class="form-row">
					<label for="age">Age</label>
					<input type="number" name="age" id="age" class="input-text" required value="<?php echo $row['age'];?>"">
				</div>

                <div class="form-row">
					<label for="home_address">Home Address</label>
					<input type="text" name="home_address" id="home_address" class="input-text" value="<?php echo $row['home_address'];?>" >
				</div>

                <div class="form-row">
					<label for="telephone_number">Telephone Number</label>
					<input type="text" name="telephone_number" id="telephone_number class="input-text" value="<?php echo $row['telephone_number'];?>">
				</div>
				
					<div class="form-row">
						<label for="duty_shift">Duty Shift</label>
						<select id="duty_shift" name="duty_shift" value="<?php echo $row['duty_shift'];?>">
							<option value="day">Day</option>
							<option value="night">Night</option>
							
						  </select>
					</div>
					<div >
						<label for="vaccination">Vaccination</label>
						<select id="vaccination" name="vaccination" value="<?php echo $row['vaccination'];?>">
							<option value="vaccinated">Vaccinated</option>
							<option value="non_vaccinated">Non Vaccinated</option>
							
						  </select>
					</div>
				
				
				<div class="form-row-last">
					<input type="submit" name="submit" class="add_staff" value="Add Staff">
				</div>
    
    </form>
    </div></div>

    </body>
    </html>

