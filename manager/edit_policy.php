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
    <title>Edit Policy</title>

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
                        <h1 style="color:dodgerblue; text-align:center;" class="page-head-line">Policy Information  
						<button class="btn" align="center"> 
						<a href="add_policy.php" class="btn">Add Policy</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$policy_id = $_GET["policy_id"];	
	}
	
	//                       checking if agent is authorized to edit or not  
	$temp_id="";
	$master_id="getnet";
	$sql = "SELECT agent_id from health_center where policy_id='$policy_id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$temp_id= $row['agent_id'];
	}
	
	if($_SESSION["managerLogIn"]==($temp_id || $master_id)){
		
	
	$sql = "SELECT * from policy where policy_id='$policy_id'";
	$result = $conn->query($sql);
	
	  echo "<div>\n";
	 

	while($row = $result->fetch_assoc()) {
		
		
?>
<form action="update_policy.php" method="post" enctype="multipart/form-data">

<?php




		echo "<label for=\"fname\">Policy Id</label>";
	    echo "<input type=\"text\" policy_id=\"fname\" name=\"policy_id\" placeholder=\"policy_id..\" value=\"$row[policy_id]\">";
	    	echo "<label for=\"fname\">Acadamic Year</label>";
	    echo "<input type=\"text\" one_four=\"fname\" name=\"anaualy\" placeholder=\"one_four..\" value=\"$row[anaualy]\">";
	    
		
		echo "<label for=\"fname\">From One to Four Family</label>";
	    echo "<input type=\"text\" one_four=\"fname\" name=\"one_four\" placeholder=\"one_four..\" value=\"$row[one_four]\">";
	    echo "<label for=\"fname\">From Five to Egiht Family</label>";
	    echo "<input type=\"text\" five_egiht=\"fname\" name=\"five_egiht\" placeholder=\"Policys id..\" value=\"$row[five_egiht]\">";

	    echo "<label for=\"fname\">From Nine To Tewelve Family</label>";
	    echo "<input type=\"text\" nine_twelve=\"fname\" name=\"nine_twelve\" placeholder=\"nine_twelve..\" value=\"$row[nine_twelve]\">";
		
		?>
			<input type="submit" value="UPDATE" name="submit">
			</form>
		<?php
	

echo "</div>\n";
echo "\n";
    }
	}else{ echo "you are not authorized to edit this Policy";
	}
	
	
	
?>
            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
