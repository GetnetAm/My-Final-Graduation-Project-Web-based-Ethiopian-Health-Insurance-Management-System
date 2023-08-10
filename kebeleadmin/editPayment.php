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
    <title>Edit Payment</title>

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
                        <h1 class="page-head-line">Payment Information  
						<button class="btn" align="center"> 
						<a href="addPayment.php" class="btn">Add Payment</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
	
<?php 
	
include'../connection.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$recipt_no = $_GET["recipt_no"];
	}
		
	
	$sql = "SELECT recipt_no, customer_id, bank_name, amount, year, status from payment where recipt_no='$recipt_no'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updatePayment.php" method="post">';
	
	while($row = $result->fetch_assoc()) {
		echo "<label for=\"fname\">RECIPT NO</label>";
	    echo "<input type=\"text\" recipt_no=\"fname\" name=\"recipt_no\" placeholder=\"Your recpit no..\" value=\"$row[recipt_no]\">";
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input type=\"text\" recipt_no=\"fname\" name=\"customer_id\" placeholder=\"Client Id..\" value=\"$row[customer_id]\">";
		echo "<label for=\"fname\">Bank Name</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"bank_name\" placeholder=\"bank_name..\" value=\"$row[bank_name]\">";
		echo "<label for=\"fname\">AMOUNT</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"amount\" placeholder=\"Amount..\" value=\"$row[amount]\">";
		echo "<label for=\"fname\">Year</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"year\" placeholder=\"Your year..\" value=\"$row[year]\">";
		echo "<label for=\"fname\">Status</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"status\" placeholder=\"Status..\" value=\"$row[status]\">";
		
		
    }
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deletePayment.php?recipt_no=".$recipt_no."'>Delete Payment</a>";
	
	
	
echo "</div>\n";
echo "\n";

	
?>


            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   

	
</body>
</html>
