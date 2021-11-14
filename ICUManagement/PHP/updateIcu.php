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
    mysqli_query($conn,"UPDATE icu set icu_bed_number='" . $_POST['icu_bed_number'] . "', 
                                            availability='" . $_POST['availability'] . "', 
                                            patient_id='" . $_POST['patient_id'] . "', 
                                            patient_nic='" . $_POST['patient_nic'] . "' ,
                                            address='" . $_POST['address'] . "',
                                            contact_number='" . $_POST['contact_number'] . "'
                                            

                                             WHERE icu_bed_number='" . $_POST['icu_bed_number'] . "'");
                        $message = "Record Modified Successfully";
                        header("Location: ../HTML/icu.php?insetion=pass");
    }

    $result = mysqli_query($conn,"SELECT * FROM icu WHERE icu_bed_number='" . $_GET['icu_bed_number'] . "'");
    $row= mysqli_fetch_array($result);
    ?>


 <html>
    <head>
    <title>Update ICU Data</title>
    <meta charset="utf-8">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../css/icu.css"/>
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
    <h2>ICU EDIT FORM</h2>
  
    
    <div class="form-row">
						<label for="id_number">ICU Bed Number</label>
						<input type="text" name="icu_bed_number" id="icu_bed_number" class="input-text" value="<?php echo $row['icu_bed_number'];?>" readonly> 
					</div>
					<div class="form-row">
						<label for="full_name">Availability</label>
						<input type="number" name="availability" id="availability" class="input-text" value="<?php echo $row['availability'];?>"  >
					</div>
                   
                    <div class="form-row">
						<label for="full_name">Patient ID</label>
						<input type="text" name="patient_id" id="patient_id" class="input-text" value="<?php echo $row['patient_id'];?>" >
					</div>
				
				

                <div class="form-row">
					<label for="age">Patient NIC</label>
					<input type="text" name="patient_nic" id="patient_nic" class="input-text"  value="<?php echo $row['patient_nic'];?>" >
				</div>

                <div class="form-row">
					<label for="home_address">Address</label>
					<input type="text" name="address" id="address" class="input-text"  value="<?php echo $row['address'];?>" >
				</div>

                <div class="form-row">
					<label for="telephone_number">Contact Number</label>
					<input type="text" name="contact_number" id="contact_number" class="input-text"  value="<?php echo $row['contact_number'];?>" >
				</div>
				
				
				
				<div class="form-row-last">
					<input type="submit" name="submit" class="add_record" value="Update Record">
				</div>

            </div>

				
    
    </form>
    </div></div>

    </body>
    </html>

