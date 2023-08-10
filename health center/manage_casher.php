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
@media(max-width: 750px){

    #page-wrapper{
        position: absolute;
        top: 800px;
        left: 0;
        text-align: center;
    }


    .navbar-side {
        z-index: 1;
        position: absolute;
        width: 100%;
    }
    


    }

</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health center information</title>

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
<?php include 'header_health_center.php'; 
$healthCenterLoggedIn = $_SESSION["healthCenterLoggedIn"];
 include "../connection.php";
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Health Center Information
                      
						
 
						</h1>
                    </div>
                </div>
				
                
                <!-- /. ROW  -->
<?php
include'../connection.php';

	$sql = "SELECT health_center_id,health_center_name,health_center_type,casher_id,name,phone,address,agent_id FROM health_center WHERE username='$healthCenterLoggedIn' ";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Health Center Name</th>\n";
    echo "    <th>Halth Type</th>\n";
    echo "    <th>Casheir NAME</th>\n";
    echo "    <th>PHONE</th>\n";
	echo "    <th>ADDRESS</th>\n";
	echo "    <th>STATUS</th>\n";
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["health_center_name"]."</td>\n";
		echo "    <td>".$row["health_center_type"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["address"]."</td>\n";
		echo "    <td>"."<a href='health_center_Status.php?health_center_id=".$row["health_center_id"]. "'>Health Center Status</a>"."</td>\n";
		

	}
	}
?>

            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>
