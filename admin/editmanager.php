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
    <title>Edit manager</title>

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
                        <h1 class="page-head-line">managers Information  
						<button class="btn" align="center"> 
						<a href="addmanager.php" class="btn">Add manager</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$manager_id = $_GET["manager_id"];	
	}
	
	//                       checking if agent is authorized to edit or not  
	$temp_id="";
	$master_id="getnet";
	$sql = "SELECT username from manager where manager_id='$manager_id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$temp_id= $row['username'];
	}
	
	if($_SESSION["adminLogIn"]==($temp_id || $master_id)){
		
	
	$sql = "SELECT * from manager where manager_id='$manager_id'";
	$result = $conn->query($sql);
	
	  echo "<div>\n";
	 

	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
		
?>
<img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">


<form action="updatemanager.php" method="post" enctype="multipart/form-data">
<input type="file" name="user_image"><br>

<?php



		
		echo "<label for=\"fname\">MANAGER ID</label>";
	    echo "<input type=\"text\" manager_id=\"fname\" name=\"manager_id\" placeholder=\"managers id..\" value=\"$row[manager_id]\">";
	    echo "<label for=\"fname\">MANAGER USERNAME</label>";
	    echo "<input type=\"text\" username=\"username\" name=\"username\" placeholder=\"managers username..\" value=\"$row[username]\">";

		
		echo "<label for=\"fname\">MANAGER PASSWORD</label>";
	    echo "<input type=\"text\" password=\"fname\" name=\"password\" placeholder=\"password..\" value=\"$row[password]\">";
	    	echo "<label for=\"fname\">FULL NAME</label>";
	    echo "<input type=\"text\" manager_id=\"fname\" name=\"name\" placeholder=\"managers name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input type=\"text\" manager_id=\"fname\" name=\"sex\" placeholder=\"managers gender..\" value=\"$row[sex]\">";
		// echo "<label for=\"fname\">BIRTH DATE</label>";
		// echo "<input type=\"text\" manager_id=\"fname\" name=\"birth_date\" placeholder=\"managers Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input type=\"text\" manager_id=\"fname\" name=\"marital_status\" placeholder=\"managers Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">NID</label>";
		echo "<input type=\"text\" age=\"age\" name=\"age\" placeholder=\"age..\" value=\"$row[age]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" manager_id=\"fname\" name=\"phone\" placeholder=\"managers Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"email\">EMAIL</label>";
		echo "<input type=\"text\" email=\"fname\" name=\"email\" placeholder=\"email..\" value=\"$row[email]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input type=\"text\" manager_id=\"fname\" name=\"address\" placeholder=\"managers Address..\" value=\"$row[address]\">";
		echo "<label for=\"fname\">SCHOOL LEVEL</label>";
		echo "<input type=\"text\" School_level=\"fname\" name=\"school_level\" placeholder=\"school_level..\" value=\"$row[school_level]\">";
					
			
		
		?>
			<input type="submit" value="UPDATE" name="submit">
			</form>
		<?php
	echo "<a href='deletemanager.php?manager_id=".$manager_id."'>Delete manager</a>";
	

echo "</div>\n";
echo "\n";
    }
	}else{ echo "you are not authorized to edit this manager";
	}
	
	
	
?>
            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
