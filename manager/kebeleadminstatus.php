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
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kebele admin Status</title>
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
<?php include 'header.php'; 
$username = $_SESSION["managerLogIn"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kebele admin Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$kebeleadmin_id = $_GET["kebeleadmin_id"];
	}
	            //   PRINTS kebeleadmin's info
	$sql = "SELECT * from kebeleadmin where kebeleadmin_id='$kebeleadmin_id'";
	$result = $conn->query($sql);
	//$policy_id = "";
	//$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
?>
		<img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">
<?php
		echo "<label for=\"fname\">kebeleadmin ID</label>";
	    echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"kebeleadmin_id\" placeholder=\"kebeleadmins id..\" value=\"$row[kebeleadmin_id]\">";
	    	echo "<label for=\"fname\">kebeleadmin username</label>";
	    echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"kebeleadmin_username\" placeholder=\"kebeleadmin username..\" value=\"$row[username]\">";
		echo "<label for=\"fname\">kebeleadmin PASSWORD</label>";
	    echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"kebeleadmin_password\" placeholder=\"kebeleadmin password..\" value=\"$row[password]\">";
	    echo "<label for=\"fname\">Full Name</label>";
	    echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"name\" placeholder=\"kebeleadmins Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"sex\" placeholder=\"kebeleadmins gender..\" value=\"$row[sex]\">";
		// echo "<label for=\"fname\">BIRTH DATE</label>";
		// echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"birth_date\" placeholder=\"kebeleadmins Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"marital_status\" placeholder=\"kebeleadmins Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">Age</label>";
		echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"age\" placeholder=\"kebeleadmins age..\" value=\"$row[age]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"phone\" placeholder=\"kebeleadmins Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"address\" placeholder=\"kebeleadmins Address..\" value=\"$row[address]\">";
		//echo "<label for=\"fname\">POLICY ID</label>";
		//echo "<input disabled type=\"text\" kebeleadmin_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
		//$policy_id = $row["policy_id"];
		$c_id      = $row["kebeleadmin_id"];
		//$a_id  = $row["agent_id"];
		//$agent_id = $row["agent_id"];
		echo "<a href='editkebeleadmin.php?kebeleadmin_id=".$c_id."'>Edit kebeleadmin</a>\n";
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
