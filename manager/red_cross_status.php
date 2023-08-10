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
    <title>Red Crossn Status</title>
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
include'../connection.php';

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color:red;">Red Cross Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$red_cross_id = $_GET["red_cross_id"];
	}
	            //   PRINTS red_cross's info
	$sql = "SELECT * from red_cross where red_cross_id='$red_cross_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
	
?>
		
<?php
		echo "<label for=\"fname\">Red Cross ID</label>";
	    echo "<input disabled type=\"text\" red_cross_id=\"fname\" name=\"red_cross_id\" placeholder=\"red_crosss id..\" value=\"$row[red_cross_id]\">";

echo "<label for=\"fname\">Red Cross Branch Name</label>";
	    echo "<input disabled type=\"text\" red_cross_id=\"fname\" name=\"red_cross_branch_name\" placeholder=\"red_cross_brach_name..\" value=\"$row[red_cross_branch_name]\">";


	    	echo "<label for=\"fname\">Red Cross Username</label>";
	    echo "<input disabled type=\"text\" red_cross_id=\"fname\" name=\"red_cross_username\" placeholder=\"red_cross username..\" value=\"$row[username]\">";
		echo "<label for=\"fname\">Red Cross Password</label>";
	    echo "<input disabled type=\"text\" red_cross_id=\"fname\" name=\"red_cross_password\" placeholder=\"red_cross password..\" value=\"$row[password]\">";
	 
		echo "<label for=\"fname\">Red Cross Phone</label>";
		echo "<input disabled type=\"text\" red_cross_id=\"fname\" name=\"phone\" placeholder=\"red_crosss Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">Red Cross Email</label>";
		echo "<input disabled type=\"text\" red_cross_id=\"fname\" name=\"email\" placeholder=\"red_crosss email..\" value=\"$row[email]\">";
		echo "<label for=\"fname\">Red Cross ADDRESS</label>";
		echo "<input disabled type=\"text\" red_cross_id=\"fname\" name=\"address\" placeholder=\"red_crosss Address..\" value=\"$row[address]\">";
		//$policy_id = $row["policy_id"];
		$c_id      = $row["red_cross_id"];
		//$a_id  = $row["agent_id"];
		//$agent_id = $row["agent_id"];
		echo "<a href='edit_red_cross.php?red_cross_id=".$c_id."'>Edit Red Cross</a>\n";
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
