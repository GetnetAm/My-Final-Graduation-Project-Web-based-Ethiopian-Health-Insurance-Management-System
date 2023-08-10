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
    <title>red_crosss</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
     
     <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.1-web/css/all.css">


<link rel="stylesheet" type="text/css" href="../assets/bestfonts/fontawesome-free-5.12.1-web/css/all.min.css">

    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
include'../connection.php';
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color:red">Red Cross Information
                        <i class="fa fa-cross" style="font-size:60px"></i>

                      
						
						
		  
				
					
				     
						   
						<button class="btn" align="center"> 
						<a href="add_red_cross.php" class="btn" style="color:white;">Add Red Cross</a>
						</button>
						</h1>
                    </div>
                </div>
				
                
                <!-- /. ROW  -->
<?php
include'../connection.php';
//$hash = md5($password);
	$sql = "SELECT red_cross_id,red_cross_branch_name,username,password,phone,email,address FROM red_cross";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
 
    echo "    <th>Red Cross Branch Name</th>\n";
      echo "    <th>Phone</th>\n";
	echo "    <th>Email</th>\n";
	echo "    <th>Specific Address</th>\n";
	echo "    <th>STATUS</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["red_cross_branch_name"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		echo "    <td>".$row["address"]."</td>\n";
		echo "    <td>"."<a href='red_cross_status.php?red_cross_id=".$row["red_cross_id"]. "'>Red Cross Status</a>"."</td>\n";
		

	}
	}
?>



            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  


	
</body>

</html>
