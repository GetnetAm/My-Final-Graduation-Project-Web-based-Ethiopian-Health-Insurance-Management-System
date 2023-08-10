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
    <title>Manager Status</title>
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
$adminLogIn= $_SESSION["adminLogIn"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manager Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$manager_id = $_GET["manager_id"];
	}
	            //   PRINTS manager's info
	$sql = "SELECT * from manager where manager_id='$manager_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
?>
		<img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">
<?php
		echo "<label for=\"fname\">manager ID</label>";
	    echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"manager_id\" placeholder=\"managers id..\" value=\"$row[manager_id]\">";
	    	echo "<label for=\"fname\">manager username</label>";
	    echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"manager_username\" placeholder=\"manager username..\" value=\"$row[username]\">";
		echo "<label for=\"fname\">manager PASSWORD</label>";
	    echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"manager_password\" placeholder=\"manager password..\" value=\"$row[password]\">";
	    echo "<label for=\"fname\">Full Name</label>";
	    echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"name\" placeholder=\"managers Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"sex\" placeholder=\"managers gender..\" value=\"$row[sex]\">";
		// echo "<label for=\"fname\">BIRTH DATE</label>";
		// echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"birth_date\" placeholder=\"managers Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"marital_status\" placeholder=\"managers Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">Age</label>";
		echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"age\" placeholder=\"managers age..\" value=\"$row[age]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"phone\" placeholder=\"managers Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input disabled type=\"text\" manager_id=\"fname\" name=\"address\" placeholder=\"managers Address..\" value=\"$row[address]\">";
			//$policy_id = $row["policy_id"];
		$c_id      = $row["manager_id"];
		$a_id  = $row["agent_id"];
		//$agent_id = $row["agent_id"];
		echo "<a href='editmanager.php?manager_id=".$c_id."'>Edit manager</a>\n";
    }
		echo "<br>\n";
		
	    echo "<br>\n";
	
	           
	if($agent_id== $username || "getnet" == $username){
			echo "<td>"."<a href='deletemanager.php?manager_id=".$manager_id. "'>Delete Manage</a>"."</td>\n";
		}else {
			echo "<td>"."<a class=\"dis\" href='deletemanager.php?manager_id=".$row["manager_id"]. "'>Delete  manager</a>"."</td>\n";
		}
	

echo "\n";


	
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
