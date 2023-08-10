<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
	
}


input[type=submit]:hover {
    background-color: #45a049;
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
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
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
    <title>health center Status</title>
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
<?php include 'header_health_center.php';
include'../connection.php'; 
//$username = $_SESSION["cashierLoggedIn"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">health center Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$health_center_id = $_GET["health_center_id"];
	}
	            //   PRINTS casher's info
	$sql = "SELECT * from health_center where health_center_id='$health_center_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
		//$images = $row["image"];
?>
		
<?php
		
		echo "<label for=\"fname\">HEALTH CENTER ID</label>";
	    echo "<input disabled type=\"text\" health_center_id=\"fname\" name=\"health_center_id\" placeholder=\"health_center_id..\" value=\"$row[health_center_id]\">";
	    echo "<label for=\"fname\">HEALTH CENTER NAME</label>";
	    echo "<input disabled type=\"text\" health_center_name=\"fname\" name=\"health_center_name\" placeholder=\"health_center_name..\" value=\"$row[health_center_name]\">";
	    echo "<label for=\"fname\">HEALTH CENTER TYPE</label>";
	    echo "<input disabled type=\"text\" health_center_type=\"fname\" name=\"health_center_type\" placeholder=\"health center type..\" value=\"$row[health_center_type]\">";


		echo "<label for=\"fname\">CASHEIR ID</label>";
	    echo "<input disabled type=\"text\" casher_id=\"fname\" name=\"casher_id\" placeholder=\"cashers id..\" value=\"$row[casher_id]\">";
	    echo "<label for=\"fname\">username</label>";
	    echo "<input disabled type=\"text\" casher_id=\"fname\" name=\"casher_id\" placeholder=\"cashers id..\" value=\"$row[username]\">";
		echo "<label for=\"fname\">HEALTH CENTER PASSWORD</label>";
	    echo "<input disabled type=\"text\" casher_id=\"fname\" name=\"casher_password\" placeholder=\"casher password..\" value=\"$row[password]\">";
		echo "<label for=\"fname\">CASHER NAME</label>";
	    echo "<input disabled type=\"text\" casher_id=\"fname\" name=\"name\" placeholder=\"cashers Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">HEALTH CENTER PHONE</label>";
		echo "<input disabled type=\"text\" casher_id=\"fname\" name=\"phone\" placeholder=\"cashers Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">HEALTH CENTER EMAIL</label>";
		echo "<input disabled type=\"text\" casher_id=\"fname\" name=\"phone\" placeholder=\"cashers Phone..\" value=\"$row[email]\">";
		echo "<label for=\"fname\">HEALTH CENTER ADDRESS</label>";
		echo "<input disabled type=\"text\" casher_id=\"fname\" name=\"address\" placeholder=\"cashers Address..\" value=\"$row[address]\">";
	
		$policy_id = $row["policy_id"];
		$c_id      = $row["health_center_id"];
		$a_id  = $row["agent_id"];
		$agent_id = $row["agent_id"];
		echo "<a href='edit_health_center.php?health_center_id=".$c_id."'>Edit health Center</a>\n";
    }
		echo "<br>\n";
		
	    echo "<br>\n";
	
	           

echo "\n";


	
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
