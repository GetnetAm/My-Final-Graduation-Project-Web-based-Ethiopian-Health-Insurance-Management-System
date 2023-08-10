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
<?php include 'adminheader.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Search Results  			
						</h1>
						
						<div class= "searchBar">
		  <form action="admin_search_page.php" method="post">
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
	   
         $sql="SELECT * FROM customer WHERE customer_id LIKE '%" . $key .  "%' OR full_name LIKE '%" . $key ."%' OR phone LIKE '%" . $key ."%'";  
		 $result = $conn->query($sql);
	if ($result->num_rows > 0) {
				
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>customer ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BIRTH DATE</th>\n";
    echo "    <th>AGE</th>\n";
    echo "    <th>PHONE</th>\n";
     echo "    <th>EMAIL</th>\n";
 	echo "    <th>ROLE</th>\n";
    echo "  </tr>";
	
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["customer_id"]."</td>\n";
		echo "    <td>".$row["full_name"]."</td>\n";
		echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["age"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		  echo "    <th>Customer</th>\n";
		
	   }	 
	  }else{ echo"Nothing found in customers Table";echo"<br>";  echo"<br>"; 
	  }
	  ///////   SEARCHES IN family
	  
  
	$sql = "SELECT * FROM family WHERE family_id LIKE '%" . $key .  "%' OR name LIKE '%" . $key ."%'";
	$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
		
			
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
      echo "    <th>CUSTOMER ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>GENDER</th>\n";
    echo "    <th>BIRTH DATE</th>\n";
    echo "    <th>AGE</th>\n";

	echo "    <th>RELATIONSHIP</th>\n";
	 echo "    <th>PHONE</th>\n";
	echo "    <th>ROLE</th>\n";
    echo "  </tr>";
	
	

    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["customer_id"]."</td>\n";

		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["sex"]."</td>\n";
		echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["age"]."</td>\n";
		echo "    <td>".$row["relationship"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
	   echo "    <th>Family</th>\n";
		echo "    </td>";
	}
	
	echo "</table>\n";
	echo "\n";
	
	
	
	} else {
	
    echo "Nothing Found in family Table";
	echo"<br>"; echo"<br>";
}
	  
//$conn->close();
?>
                
                <!-- /. ROW  -->
<?php
	
	   $key       = $_POST["key"];

	   ///////    SEARCHES IN customerS
	   
         $sql="SELECT * FROM manager WHERE manager_id LIKE '%" . $key .  "%' OR name LIKE '%" . $key ."%' OR phone LIKE '%" . $key ."%' OR username LIKE '%". $key ."%'";  
		 $result = $conn->query($sql);
	if ($result->num_rows > 0) {
				
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>ManagerID</th>\n";
     echo "    <th>Username</th>\n";

    echo "    <th>NAME</th>\n";
    echo "    <th>PHONE</th>\n";
     echo "    <th>EMAIL</th>\n";
	echo "    <th>ROLE</th>\n";
    echo "  </tr>";
	
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["manager_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";

		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		 echo "    <th>Manager</th>\n";

		echo "   </td>\n";
	
	   }	 
	  }else{ echo"Nothing found in manager Table";echo"<br>";  echo"<br>"; 
	  }
	  ///////   SEARCHES IN family
	 ?>
<?php
	
	   $key       = $_POST["key"];

	   ///////    SEARCHES IN customerS
	   
        $sql="SELECT * FROM red_cross WHERE red_cross_id LIKE '%" . $key .  "%' OR red_cross_branch_name LIKE '%" . $key ."%' OR phone LIKE '%" . $key ."%' OR username LIKE '%" . $key ."%'"; ;  
		 $result = $conn->query($sql);
	if ($result->num_rows > 0) {
				
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Red Cross ID</th>\n";
    echo "    <th>Red Cross Branch</th>\n";
     echo "    <th>Username</th>\n";
    echo "    <th>PHONE</th>\n";
     echo "    <th>EMAIL</th>\n";
	echo "    <th>ROLE</th>\n";
    echo "  </tr>";
	
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["red_cross_id"]."</td>\n";
		echo "    <td>".$row["red_cross_branch_name"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		 echo "    <th>Red Cross</th>\n";

		echo "   </td>\n";
	
	   }	 
	  }else{ echo"Nothing found in red cross Table";echo"<br>";  echo"<br>"; 
	  }
	  ///////   SEARCHES IN family
	  
  
  $sql="SELECT * FROM health_center WHERE health_center_id LIKE '%" . $key .  "%' OR health_center_name LIKE '%" . $key ."%' OR phone LIKE '%" . $key ."%' OR username LIKE '%". $key ."%'";  
	$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
		
			
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Health Center Id</th>\n";
    echo "    <th>Health Center Name</th>\n";
      echo "    <th>User Name</th>\n";
    echo "    <th>PHONE</th>\n";
    echo "    <th>Email</th>\n";
    echo "    <th>ROLE</th>\n";

 
    echo "  </tr>";
	
	

    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["health_center_id"]."</td>\n";
		echo "    <td>".$row["health_center_name"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		echo "    <th>Healh Center</th>\n";

	
			echo "    </td>";
	}
	
	echo "</table>\n";
	echo "\n";
	
	
	
	} 	  
//$conn->close();
?>










<?php
	
	   $key       = $_POST["key"];

	   ///////    SEARCHES IN customerS
	   
        $sql="SELECT * FROM kebeleadmin WHERE kebeleadmin_id LIKE '%" . $key .  "%' OR name LIKE '%" . $key ."%' OR phone LIKE '%" . $key ."%' OR username LIKE '%". $key ."%'"; ;  
		 $result = $conn->query($sql);
	if ($result->num_rows > 0) {
				
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Kebele Admin ID</th>\n";
    echo "    <th>Kebele Admin Name</th>\n";
      echo "    <th>username</th>\n";

    echo "    <th>PHONE</th>\n";
     echo "    <th>EMAIL</th>\n";
	echo "    <th>ROLE</th>\n";
    echo "  </tr>";
	
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["kebeleadmin_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["username"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		 echo "    <th>Kebele Adminster</th>\n";

		echo "   </td>\n";
	
	   }	 
	  }else{ echo"Nothing found in kebele adminstrater";echo"<br>";  echo"<br>"; 
	  }
	  ///////   SEARCHES IN family
	  

$conn->close();
?>
  


        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    
    

	
</body>
</html>
