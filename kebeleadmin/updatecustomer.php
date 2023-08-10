<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update customer</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'kebeleheader.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update customer
						<button class="btn" align="center"> 
                        <a href="addcustomer.php" class="btn">Add customer</a>
                        </button>
						</h1>
                    
                
				
				
<?php
$customer_id = $customer_password = $full_name = $username= $sex = $birth_date = $marital_status = $age = $phone = $email=$kebele = $woreda ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
	    $customer_id       = $_POST["customer_id"];
	   
		$customer_password = $_POST["customer_password"];
		$full_name            = $_POST["full_name"];
	    	$username           = $_POST["username"];

		$sex             = $_POST["sex"];
		//$birth_date      = $_POST["birth_date"];
		$maritial_status = $_POST["marital_status"];
		$age             = $_POST["age"];
		$phone           = $_POST["phone"];
		$email           = $_POST["email"];

		$kebele        = $_POST["kebele"];
		$woreda         = $_POST["woreda"];


		//$policy_id       = $_POST["policy_id"];
		//$agent_id        = $_POST["agent_id"];

		
		if(isset($_POST['submit'])){
			$image=$_FILES['user_image']['name'];
		$tmp_name=$_FILES['user_image']['tmp_name'];

			/*
$img_name = $_FILES["fileToUpload"]["name"];
//$size = $_FILES['file']['size']
//$type = $_FILES['file']['type']

$tmp_name = $_FILES['fileToUpload']['tmp_name'];
$error = $_FILES['fileToUpload']['error'];

if (!empty($_FILES['fileToUpload']['name'])) {
		$profileImage = basename($_FILES["fileToUpload"]["name"]);
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		$uploadOk == 1;
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			//	echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		/*/
		
		
		
		
			$sql = "UPDATE customer set customer_id='$customer_id',customer_password='$customer_password',full_name='$full_name', username='$username', image='$image' ,sex='$sex',marital_status='$marital_status',age='$age',phone='$phone',email='$email',kebele='$kebele',woreda='$woreda' where customer_id='$customer_id'";
		
		if ($conn->query($sql) === true) {

			echo "customer record updated successfully";
			move_uploaded_file($tmp_name, "../upload/$image");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		}else {
			
			$sql = "UPDATE customer set customer_id='$customer_id' , password='$customer_password',full_name='$full_name',username='$username', birth_date ,sex='$sex',marital_status='$marital_status',age='$age',phone='$phone',email='$email',kebele='$keble',woreda='$woreda'= where customer_id='$customer_id'";
		
		if ($conn->query($sql) === true) {
			echo "customer record updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}	
		
		}
		
		
?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->

		

    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
