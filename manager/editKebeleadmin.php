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
    <title>Edit kebeleadmin</title>

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
                        <h1 class="page-head-line">kebeleadmins Information  
						<button class="btn" align="center"> 
						<a href="addkebeleadmin.php" class="btn">Add kebeleadmin</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$kebeleadmin_id = $_GET["kebeleadmin_id"];	
	}
	
	//                       checking if agent is authorized to edit or not  
	$temp_id="";
	$master_id="getnet";
	$sql = "SELECT username from kebeleadmin where kebeleadmin_id='$kebeleadmin_id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$temp_id= $row['username'];
	}
	
	if($_SESSION["managerLogIn"]==($temp_id || $master_id)){
		
	
	$sql = "SELECT * from kebeleadmin where kebeleadmin_id='$kebeleadmin_id'";
	$result = $conn->query($sql);
	
	  echo "<div>\n";
	 

	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
		
?>
<img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">


<form action="updatekebeleadmin.php" method="post" enctype="multipart/form-data">
<input type="file" name="user_image"><br>

<?php



		
		echo "<label for=\"fname\">kebeleadmin ID</label>";
	    echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"kebeleadmin_id\" placeholder=\"kebeleadmins id..\" value=\"$row[kebeleadmin_id]\">";
	    echo "<label for=\"fname\">kebeleadmin usrname</label>";
	    echo "<input type=\"text\" username=\"username\" name=\"username\" placeholder=\"kebeleadmins username..\" value=\"$row[username]\">";

		
		echo "<label for=\"fname\">casher PASSWORD</label>";
	    echo "<input type=\"text\" password=\"fname\" name=\"password\" placeholder=\"password..\" value=\"$row[password]\">";
	    	echo "<label for=\"fname\">NAME</label>";
	    echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"name\" placeholder=\"kebeleadmins name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"sex\" placeholder=\"kebeleadmins gender..\" value=\"$row[sex]\">";
		echo "<label for=\"fname\">BIRTH DATE</label>";
		echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"birth_date\" placeholder=\"kebeleadmins Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"marital_status\" placeholder=\"kebeleadmins Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">NID</label>";
		echo "<input type=\"text\" age=\"age\" name=\"age\" placeholder=\"age..\" value=\"$row[age]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"phone\" placeholder=\"kebeleadmins Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"email\">Email</label>";
		echo "<input type=\"text\" email=\"fname\" name=\"email\" placeholder=\"email..\" value=\"$row[email]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"address\" placeholder=\"kebeleadmins Address..\" value=\"$row[address]\">";
		echo "<label for=\"fname\">School Level</label>";
		echo "<input type=\"text\" School_level=\"fname\" name=\"school_level\" placeholder=\"school_level..\" value=\"$row[school_level]\">";
		echo "<label for=\"fname\">POLICY ID</label>";
		//echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
		//echo "<label for=\"fname\">AGENT ID</label>";
		//echo "<input type=\"text\" kebeleadmin_id=\"fname\" name=\"agent_id\" placeholder=\"agent id..\" value=\"$row[agent_id]\">";
		
		

		
		
		?>
			<input type="submit" value="UPDATE" name="submit">
			</form>
		<?php
	echo "<a href='deletekebeleadmin.php?kebeleadmin_id=".$kebeleadmin_id."'>Delete kebeleadmin</a>";
	

echo "</div>\n";
echo "\n";
    }
	}else{ echo "you are not authorized to edit this kebeleadmin";
	}
	
	
	
?>
            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
