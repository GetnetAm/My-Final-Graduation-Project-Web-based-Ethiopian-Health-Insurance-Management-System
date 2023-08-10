<!DOCTYPE html>

<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 13px;
    margin: 3px 0;
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
    <title>Edit Health Center</title>

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
<?php include 'header.php'; 
include'../connection.php';
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Health Center Information  
						<button class="btn" align="center"> 
						<a href="add_health_Center.php" class="btn">Add Health Center</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$health_center_id = $_GET["health_center_id"];	
	}
	
	//                       checking if agent is authorized to edit or not  
	$temp_id="";
	$master_id="getnet";
	$sql = "SELECT agent_id from health_center where health_center_id='$health_center_id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$temp_id= $row['agent_id'];
	}
	
	if($_SESSION["managerLogIn"]==($temp_id || $master_id)){
		
	
	$sql = "SELECT * from health_center where health_center_id='$health_center_id'";
	$result = $conn->query($sql);
	
	  echo "<div>\n";
	 

	while($row = $result->fetch_assoc()) {
		//$images = $row["image"];
		
?>


<?php




		echo "<label for=\"fname\">Health Center ID</label>";
	    echo "<input type=\"text\" health_center_id=\"fname\" name=\"health_center_id\" placeholder=\"health_center_id..\" value=\"$row[health_center_id]\">";
	    	echo "<label for=\"fname\">Health Center Type</label>";
	    echo "<input type=\"text\" health_center_type=\"fname\" name=\"health_center_name\" placeholder=\"health_center_type..\" value=\"$row[health_center_name]\">";
	    echo "<label for=\"fname\">casher ID</label>";
		
		
		echo "<label for=\"fname\">Health Center Type</label>";
	    echo "<input type=\"text\" health_center_type=\"fname\" name=\"health_center_type\" placeholder=\"health_center_type..\" value=\"$row[health_center_type]\">";
	    echo "<label for=\"fname\">casher ID</label>";
	    echo "<input type=\"text\" casher_id=\"fname\" name=\"casher_id\" placeholder=\"cashers id..\" value=\"$row[casher_id]\">";

	    echo "<label for=\"fname\">Health Center Username</label>";
	    echo "<input type=\"text\" username=\"fname\" name=\"username\" placeholder=\"username..\" value=\"$row[username]\">";

		echo "<label for=\"fname\">Health Center PASSWORD</label>";
	    echo "<input type=\"text\" password=\"fname\" name=\"password\" placeholder=\"password..\" value=\"$row[password]\">";
		echo "<label for=\"fname\">Current Casheir Name</label>";
	    echo "<input type=\"text\" casher_id=\"fname\" name=\"name\" placeholder=\"cashers name..\" value=\"$row[name]\">";

		echo "<label for=\"fname\">Health Center Phone</label>";

		echo "<input type=\"text\" casher_id=\"fname\" name=\"phone\" placeholder=\"cashers Phone..\" value=\"$row[phone]\">";


        echo "<label for=\"fname\">Health Center Email</label>";
		echo "<input type=\"text\" Email=\"email\" name=\"email\" placeholder=\"email..\" value=\"$row[email]\">";	
		echo "<label for=\"fname\">Health Center Address</label>";
		echo "<input type=\"text\" address=\"fname\" name=\"address\" placeholder=\"address..\" value=\"$row[address]\">";
		/*echo "<label for=\"fname\">POLICY ID</label>";
		echo "<input type=\"text\" casher_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
		echo "<label for=\"fname\">AGENT ID</label>";
		echo "<input type=\"text\" casher_id=\"fname\" name=\"agent_id\" placeholder=\"agent id..\" value=\"$row[agent_id]\">";
*/ 




		
		
		?>
			<input type="submit" value="UPDATE" name="submit">
			</form>
		<?php
	echo "<a href='delete_health_center.php?health_center_id=".$health_center_id."'>Delete Health Center</a>";
	

echo "</div>\n";
echo "\n";
    }
	}else{ echo "you are not authorized to edit this casher";
	}
	
	
	
?>
            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
