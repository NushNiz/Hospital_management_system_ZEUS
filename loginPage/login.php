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




   

    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE userName='$userName' and password='$password' ";
        $data = mysqli_query($conn,$sql);
        $result = mysqli_num_rows($data);
        
        if($result){
			 header("location:../AdminDashboard/adminDash.php");
    }
            
        
        else{
            
            header("location:login.html");
          
        }}

?>

