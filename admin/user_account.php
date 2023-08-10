<!DOCTYPE html>

<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
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
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
.searchBox{
    
    cursor: pointer;
	font-size: 85%;
	
}

</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Account Controlling</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'adminheader.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color:dodgerblue; text-align:center;">User Account Information
                      
						
					
                    </div>
                </div>
				
                
                <!-- /. ROW  -->


<?php

	$sql = "SELECT phone,username,password FROM manager";
	$result = $conn->query($sql);
	echo "<table class=\"table\">\n";

	echo "Manager Information\n";
	
	    echo "  <tr>\n";
    echo "    <th>Phone</th>\n";

    echo "    <th>username</th>\n";
     echo "    <th>Password</th>\n";
      
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";
		echo "    <td>".$row["password"]."</td>\n";
		      //$password = md5($password);
 //$enc=base64_encode($password);
//echo base64_decode($password);
//echo $password;

	}
	}
?>

<br>



<?php

	$sql = "SELECT phone,username,password FROM kebeleadmin";
	$result = $conn->query($sql);
	echo "<table class=\"table\">\n";
	echo "kebele Admin Information\n";
	
    echo "  <tr>\n";
    echo "    <th>Phone</th>\n";

    echo "    <th>username</th>\n";
     echo "    <th>Password</th>\n";
      
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";
		echo "    <td>".$row["password"]."</td>\n";

	}
	}
?>



<?php
echo "<br>\n";
		
	    echo "<br>\n";



	$sql = "SELECT health_center_name, phone,username,password FROM health_center";
	$result = $conn->query($sql);

	
	echo "<table class=\"table\">\n";
		echo "Health Center Information\n";
    echo "  <tr>\n";
     echo "    <th>Health Center Name</th>\n";
    echo "    <th>Phone</th>\n";

    echo "    <th>username</th>\n";
     echo "    <th>Password</th>\n";
    
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["health_center_name"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";
		echo "    <td>".$row["password"]."</td>\n";

	}
	}
?>

<?php
echo "<br>\n";
		
	    echo "<br>\n";



	$sql = "SELECT phone,username,password FROM red_cross";
	$result = $conn->query($sql);

	
	echo "<table class=\"table\">\n";
		echo "Red Cross Information\n";
    echo "  <tr>\n";
   
    echo "    <th>Phone</th>\n";

    echo "    <th>username</th>\n";
     echo "    <th>Password</th>\n";
    
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";

		echo "    <td>".$row["password"]."</td>\n";

	}
	}
?>

<?php
echo "<br>\n";
		
	    echo "<br>\n";



	$sql = "SELECT full_name,phone,customer_password FROM customer";
	$result = $conn->query($sql);

	
	echo "<table class=\"table\">\n";
		echo "Customer Information\n";
    echo "  <tr>\n";
     echo "    <th>Full Name</th>\n";
    echo "    <th>username</th>\n";
      echo "    <th>This is encripted password</th>\n";



     //echo "    <th>base64_decode</th>\n";
    
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["full_name"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		
		echo "    <td>".$row["customer_password"]."</td>\n";

	}
	}
?>

<?php
   //$password = md5($password);
 //$enc=base64_encode($password);
//echo base64_decode($enc);



?>




            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  


    
	
</body>

</html>
