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
    <title>Edit customer</title>

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
<?php include 'kebeleheader.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">customers Information  
						<button class="btn" align="center"> 
						<a href="addcustomer.php" class="btn">Add customer</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$customer_id = $_GET["customer_id"];	
	}
	
	//                       checking if agent is authorized to edit or not  
	$temp_id="";
	$master_id="getnet";
	$sql = "SELECT phone from customer where customer_id='$customer_id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$temp_id= $row['phone'];
	}
	
	if($_SESSION["kebeleAdminLogIn"]==($temp_id || $master_id)){
		
	
	$sql = "SELECT * from customer where customer_id='$customer_id'";
	$result = $conn->query($sql);
	
	  echo "<div>\n";
	 

	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
		
?>
<img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">


<form action="updatecustomer.php" method="post" enctype="multipart/form-data">
<input type="file" name="user_image"><br>

<?php



		
		echo "<label for=\"fname\">customer ID</label>";
	    echo "<input type=\"text\" customer_id=\"fname\" name=\"customer_id\" placeholder=\"customers id..\" value=\"$row[customer_id]\">";
		
		echo "<label for=\"fname\">casher PASSWORD</label>";
	    echo "<input type=\"text\" password=\"fname\" name=\"customer_password\" placeholder=\"password..\" value=\"$row[customer_password]\">";
	    	echo "<label for=\"fname\">full_name</label>";
	    echo "<input type=\"text\" Name=\"full_name\" name=\"full_name\" placeholder=\"full_name..\" value=\"$row[full_name]\">";
	        	echo "<label for=\"fname\">User Name</label>";
	    echo "<input type=\"text\" Name=\"username\" name=\"username\" placeholder=\"username..\" value=\"$row[username]\">";

		echo "<label for=\"fname\">GENDER</label>";
		echo "<input type=\"text\" Gender=\"fname\" name=\"sex\" placeholder=\"customers gender..\" value=\"$row[sex]\">";
		   	echo "<label for=\"fname\">Martial Status</label>";
	    echo "<input type=\"text\" Name=\"marital_status\" name=\"marital_status\" placeholder=\"marital_status..\" value=\"$row[marital_status]\">";


		// 
		// echo "<label for=\"fname\">MARITIAL STATUS</label>";
		// echo "<input type=\"text\" marital_status=\"fname\" name=\"marital_status\" placeholder=\"customers Maritial echo "<label for=\"fname\">BIRTH DATE</label>";
		// echo "<input type=\"text\" birth_date=\"fname\" name=\"birth_date\" placeholder=\"customers Birth Date..\" value=\"$row[birth_date]\">";Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">NID</label>";
		echo "<input type=\"text\" age=\"age\" name=\"age\" placeholder=\"age..\" value=\"$row[age]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" phone=\"fname\" name=\"phone\" placeholder=\"customers Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"email\">Email</label>";
		echo "<input type=\"text\" email=\"fname\" name=\"email\" placeholder=\"email..\" value=\"$row[email]\">";
		echo "<label for=\"fname\">kebele</label>";
		echo "<input type=\"text\" kebele=\"fname\" name=\"kebele\" placeholder=\"customers kebele..\" value=\"$row[kebele]\">";
		echo "<label for=\"fname\">woreda</label>";
		echo "<input type=\"text\" woreda=\"fname\" name=\"woreda\" placeholder=\"school_level..\" value=\"$row[woreda]\">";
				
		

		
		
		?>
			<input type="submit" value="UPDATE" name="submit">
			</form>
		<?php
	echo "<a href='deletecustmer.php?customer_id=".$customer_id."'>Remove customer</a>";
	

echo "</div>\n";
echo "\n";
    }
	}else{ echo "you are not authorized to edit this customer";
	}
	
	
	
?>
            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
