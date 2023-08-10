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
    <title>Edit red_cross</title>

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
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color:red">Red Cross Information  
						<button class="btn" align="center"> 
						<a href="add_red_cross.php" class="btn" style="color: white;">Add new red cross</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$red_cross_id = $_GET["red_cross_id"];	
	}
	
	//                       checking if agent is authorized to edit or not  
	$temp_id="";
	$master_id="getnet";
	$sql = "SELECT username from red_cross where red_cross_id='$red_cross_id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$temp_id= $row['username'];
	}
	
	if($_SESSION["managerLogIn"]==($temp_id || $master_id)){
		
	
	$sql = "SELECT * from red_cross where red_cross_id='$red_cross_id'";
	$result = $conn->query($sql);
	
	  echo "<div>\n";
	 

	while($row = $result->fetch_assoc()) {
			
?>

<form action="update_red_cross.php" method="post" enctype="multipart/form-data">


<?php

echo "<label for=\"fname\">Red Cross Id</label>";
	    echo "<input type=\"text\" red_cross_id=\"fname\" name=\"red_cross_id\" placeholder=\"red_cross_id..\" value=\"$row[red_cross_id]\">";
	    	echo "<label for=\"fname\">Red Cross Branch Name</label>";
	    echo "<input type=\"text\" red_cross_branch_name=\"fname\" name=\"red_cross_branch_name\" placeholder=\"Red cross Branch Name..\" value=\"$row[red_cross_branch_name]\">";
	    echo "<label for=\"fname\">casher ID</label>";
	

	    echo "<label for=\"fname\">Red Cross Branch Name</label>";
	    echo "<input type=\"text\" username=\"fname\" name=\"username\" placeholder=\"username..\" value=\"$row[username]\">";

		echo "<label for=\"fname\">Red Cross Password</label>";
	    echo "<input type=\"text\" password=\"fname\" name=\"password\" placeholder=\"password..\" value=\"$row[password]\">";
		echo "<label for=\"fname\">Red Cross Phone</label>";

		echo "<input type=\"text\" casher_id=\"fname\" name=\"phone\" placeholder=\"cashers Phone..\" value=\"$row[phone]\">";

        echo "<label for=\"fname\">Red Cross Email</label>";
		echo "<input type=\"text\" Email=\"email\" name=\"email\" placeholder=\"email..\" value=\"$row[email]\">";	
		echo "<label for=\"fname\">Red Cross Address</label>";
		echo "<input type=\"text\" address=\"fname\" name=\"address\" placeholder=\"address..\" value=\"$row[address]\">";



		











		
		
		?>
			<input type="submit" value="UPDATE" name="submit">
			</form>
		<?php
	echo "<a href='delete_red_cross.php?red_cross_id=".$red_cross_id."'>Delete Red Cross</a>";
	

echo "</div>\n";
echo "\n";
    }
	}else{ echo "you are not authorized to edit this Red Cross";
	}
	
	
	
?>
            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
