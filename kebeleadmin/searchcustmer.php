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
.searchBar {
	float: auto;
	cursor: pointer;
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
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

.searchBar {
	float: auto;
	cursor: pointer;
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search</title>

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
                        <h1 class="page-head-line">Search Results  			
						</h1>
						
						<div class= "searchBar">
		  <form action="searchcustmer.php" method="post">
          <input type="text" name="key"><br>
          <input class="searchBtn" type="submit" value="SEARCH">
		  </br>
          </form>
	  </div>
						
						
						
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php
	
	   $key       = $_POST["key"];

	   ///////    SEARCHES IN customerS
	   
         $sql="SELECT * FROM customer WHERE customer_id LIKE '%" . $key .  "%' OR full_name LIKE '%" . $key ."%' OR username LIKE '%" . $key ."%' OR phone LIKE '%" . $key ."%'";  
		 $result = $conn->query($sql);
	if ($result->num_rows > 0) {
				
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>customer ID</th>\n";
    echo "    <th>NAME</th>\n";
    //echo "    <th>BIRTH DATE</th>\n";
     echo "    <th>Username</th>\n";
    echo "    <th>AGE</th>\n";
    echo "    <th>PHONE</th>\n";

     echo "    <th>EMAIL</th>\n";
     echo "    <th>KEBELE</th>\n";
	echo "    <th>WOREDA</th>\n";
	echo "    <th>STATUS</th>\n";
	echo "    <th>UPDATE</th>\n";
    echo "  </tr>";
	
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["customer_id"]."</td>\n";
		echo "    <td>".$row["full_name"]."</td>\n";
		//echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";

		echo "    <td>".$row["age"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		echo "    <td>".$row["kebele"]."</td>\n";
		echo "    <td>".$row["woreda"]."</td>\n";
		echo "    <td>"."<a href='customerinformation.php?customer_id=".$row["customer_id"]. "'>customer Status</a>"."</td>\n";
		if($row["agent_id"]== $username){
			echo "<td>"."<a href='editcustomer.php?customer_id=".$row["customer_id"]. "'>Edit</a>"."</td>\n"; 
		}else{
			echo "<td>"."<a class=\"dis\" href='editcustomer.php?customer_id=".$row["customer_id"]. "'>Edit</a>"."</td>\n";
		}
	   }	 
	  }else{ echo"Nothing found in customers Table";echo"<br>";  echo"<br>"; 
	  }
	  ///////   SEARCHES IN family
	  
  
	$sql = "SELECT * FROM family WHERE family_id LIKE '%" . $key .  "%' OR name LIKE '%" . $key ."%'";
	$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
		
			
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>GENDER</th>\n";
    //echo "    <th>BIRTH DATE</th>\n";
    echo "    <th>AGE</th>\n";

	echo "    <th>RELATIONSHIP</th>\n";
	 echo "    <th>PHONE</th>\n";
	echo "    <th>UPDATE</th>\n";
    echo "  </tr>";
	
	

    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["sex"]."</td>\n";
		//echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["age"]."</td>\n";
		echo "    <td>".$row["relationship"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>"."<a href='customerinformation.php?customer_id=".$row["customer_id"]. "'>customer Status</a>"."</td>\n";
		echo "    </td>";
	}
	
	echo "</table>\n";
	echo "\n";
	
	
	
	} else {
	
    echo "Nothing Found in family Table";
	echo"<br>"; echo"<br>";
}
	  
$conn->close();
?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    
    

	
</body>
</html>
