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
    mysqli_query($conn,"UPDATE patients set patient_id='" . $_POST['patient_id'] . "', 
                                            nic='" . $_POST['patient_nic'] . "', 
                                            patient_name='" . $_POST['patient_name'] . "', 
                                            patient_age='" . $_POST['patient_age'] . "' ,
                                            patient_address='" . $_POST['patient_address'] . "',
                                            patient_contact='" . $_POST['patient_cno'] . "', 
                                            patient_admission='" . $_POST['patient_dof'] . "' ,
                                            patient_state='" . $_POST['State_of_patient'] . "'

                                             WHERE patient_id='" . $_POST['patient_id'] . "'");
                        $message = "Record Modified Successfully";
                        header("Location: ../HTML/patient.php?insetion=pass");
    }

    $result = mysqli_query($conn,"SELECT * FROM patients WHERE patient_id='" . $_GET['patient_id'] . "'");
    $row= mysqli_fetch_array($result);
    ?>


 <html>
    <head>
    <title>Update Employee Data</title>
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
    <link rel="stylesheet" href="../css/AddPatient.css"/>
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
    <h2>PATIENT EDIT FORM</h2>
  
    
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="Patient_ID">Patient ID</label>
						<input type="text" name="patient_id" id="patient_id" class="input-text"  value="<?php echo $row['patient_id'];?>" readonly >
					</div>
					<div class="form-row form-row-1">
						<label for="NIC">NIC</label>
						<input type="text" name="patient_nic" id="patient_nic" class="input-text" value="<?php echo $row['nic']; ?>">
					</div>
				</div>
				<div class="form-row">
					<label for="Patient_Name">Patient Name</label>
					<input type="text" name="patient_name" id="patient_name" class="input-text" value="<?php echo $row['patient_name'];?>">
				</div>

                <div class="form-row">
					<label for="Patient_Age">Patient Age</label>
					<input type="number" name="patient_age" id="patient_age" class="input-text" value="<?php echo $row['patient_age'];?>" >
				</div>

                <div class="form-row">
					<label for="Patient_Address">Patient Address</label>
					<input type="text" name="patient_address" id="patient_address" class="input-text" value="<?php echo $row['patient_address'];?>" >
				</div>

                <div class="form-row">
					<label for="Patient_Contact_Number">Patient Contact Number</label>
					<input type="text" name="patient_cno" id="patient_cno" class="input-text" value="<?php echo $row['patient_contact'];?>" >
				</div>

                <div class="form-row">
					<label for="Date_of_Admission">Date of Admission </label>
					<input type="text" name="patient_dof" id="patient_dof" class="input-text" value="<?php echo $row['patient_admission'];?>">
				</div>

                <div class="form-row">
					<label for="State_of_patient">State of patient </label>
					<select class="input-text" id="State_of_patient" name="State_of_patient" value="<?php echo $row['patient_state'];?>">
                        <option value="critical">Critical</option>
                        <option value="normal">Normal</option>
                        <option value="death">Death</option>
                        <option value="discharged">Discharged</option>
                        </select>
				</div>

				<div class="form-row-last">
					<input type="submit" name="submit" class="AddPatient" value="EDIT PATIENT">
				</div>
    
    </form>
    </div></div>

    </body>
    </html>

