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
    <title>Update manager</title>
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
<?php include 'adminheader.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update manager
						<button class="btn" align="center"> 
                        <a href="addmanager.php" class="btn">Add manager</a>
                        </button>
						</h1>
                    
                
				
				
<?php
$manager_id = $manager_username= $manager_password = $name = $sex = $marital_status = $age = $phone = $email=$address = $school_level ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
	    $manager_id       = $_POST["manager_id"];
	    $manager_username = $_POST["username"];
		$manager_password = $_POST["password"];
		$name            = $_POST["name"];
		$sex             = $_POST["sex"];
		//$birth_date      = $_POST["birth_date"];
		$maritial_status = $_POST["marital_status"];
		$age             = $_POST["age"];
		$phone           = $_POST["phone"];
		$email           = $_POST["email"];

		$address         = $_POST["address"];
		$school_level         = $_POST["school_level"];


		//$policy_id       = $_POST["policy_id"];
		//$agent_id        = $_POST["agent_id"];

		
		if(isset($_POST['submit'])){
			$image=$_FILES['user_image']['name'];
		$tmp_name=$_FILES['user_image']['tmp_name'];

		?>

			


<?php 
$check=0;

 if(isset($_POST['submit'])&&$check==0)
            {
                
        $manager_password=md5($manager_password);

}
?>




<?php
		
		
		
		
			$sql = "UPDATE manager set manager_id='$manager_id',username='$manager_username', password='$manager_password', image='$image' ,name='$name' ,sex='$sex',birth_date='',marital_status='$marital_status',age='$age',phone='$phone',email='$email',address='$address',school_level='$school_level',policy_id='',agent_id='' where manager_id='$manager_id'";
		
		if ($conn->query($sql) === true) {

			echo "manager record updated successfully";
			move_uploaded_file($tmp_name, "../upload/$image");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		}else {
			
			$sql = "UPDATE manager set manager_id='$manager_id' ,username='$manager_username', password='$manager_password',name='$name' ,sex='$sex',birth_date='',marital_status='$marital_status',age='$age',phone='$phone',email='$email',address='$address',school_level='$school_level',policy_id='',agent_id='' where manager_id='$manager_id'";
		
		if ($conn->query($sql) === true) {
			echo "manager record updated successfully";
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
