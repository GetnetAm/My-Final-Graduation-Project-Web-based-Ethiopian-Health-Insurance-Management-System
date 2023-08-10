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
    <title>Edit notification</title>

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
                        <h1 style="color:dodgerblue; text-align:center;" class="page-head-line"> Edit notification   
						<button class="btn" align="center"> 
						<a href="add_notification.php" class="btn">Add notification</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$notification_id = $_GET["notification_id"];	
	}
	
	//                       checking if agent is authorized to edit or not  
	$temp_id="";
	$master_id="getnet";	
	if($_SESSION["managerLogIn"]==($temp_id || $master_id)){
		
	
	$sql = "SELECT * from notification where notification_id='$notification_id'";
	$result = $conn->query($sql);
	
	  echo "<div>\n";
	 

	while($row = $result->fetch_assoc()) {
		
		
?>
<form action="update_notification.php" method="post" enctype="multipart/form-data">

<?php




		echo "<label for=\"fname\">notification Id</label>";
	    echo "<input type=\"text\" notification_id=\"fname\" name=\"notification_id\" placeholder=\"notification_id..\" value=\"$row[notification_id]\">";
	    	echo "<label for=\"fname\">Date</label>";
	    echo "<input type=\"text\" notification=\"fname\" name=\"date\" placeholder=\"notification..\" value=\"$row[date]\">";
	    
		
		echo "<label for=\"fname\">Notification</label>";
	    echo "<input type=\"text\" notification=\"fname\" name=\"notification\" placeholder=\"notification..\" value=\"$row[notification]\">";
	    
		?>
			<input type="submit" value="UPDATE" name="submit">
			</form>
		<?php
	

echo "</div>\n";
echo "\n";
    }
	}else{ echo "you are not authorized to edit this notification";
	}
	
	
	
?>
            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
