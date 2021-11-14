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
    mysqli_query($conn,"UPDATE stock set id='" . $_POST['item_id'] . "', 
                                            name='" . $_POST['name'] . "', 
                                            category='" . $_POST['category'] . "', 
                                            brand='" . $_POST['brand'] . "' ,
                                            quantity='" . $_POST['quantity'] . "'

                                             WHERE id='" . $_POST['item_id'] . "'");
                        $message = "Record Modified Successfully";
                        header("Location: ../HTML/stock.php?insetion=pass");
    }

    $result = mysqli_query($conn,"SELECT * FROM stock WHERE id='" . $_GET['id'] . "'");
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
    <link rel="stylesheet" href="../css/stock.css"/>
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
    <h2>STOCK EDIT FORM</h2>
  
    
    <div class="form-row">
						<label for="id_number">Item ID</label>
						<input type="text" name="item_id" id="item_id" class="input-text" value="<?php echo $row['id'];?>">
					</div>
					<div class="form-row">
						<label for="full_name">Name</label>
						<input type="text" name="name" id="name" class="input-text" value="<?php echo $row['name'];?>"
					</div>

                    <div class="form-row">
						<label for="duty_shift">Category</label>
						<select id="category" name="category" value="<?php echo $row['category'];?>">
							<option value="hygiene_necessary">Hygiene necessary</option>
							<option value="vaccine">vaccines</option>
                            <option value="equipment">Equipment</option>
                            <option value="beds">Beds</option>
                            <option value="medicine">Medicine</option>
							
						  </select>
					</div>
                   
                    <div class="form-row">
						<label for="full_name">Brand</label>
						<input type="text" name="brand" id="brand" class="input-text" value="<?php echo $row['brand'];?>">
					</div>
				
				

                <div class="form-row">
					<label for="age">Quantity</label>
					<input type="number" name="quantity" id="quantity" class="input-text" value="<?php echo $row['quantity'];?>" required>
				</div>
				
				
				<div class="form-row-last">
					<input type="submit" name="submit" class="add_stock" value="Edit Stock">
				</div>
    
    </form>
    </div></div>

    </body>
    </html>

