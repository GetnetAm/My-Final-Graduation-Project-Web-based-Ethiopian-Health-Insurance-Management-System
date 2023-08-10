<!DOCTYPE html>
<html>
<head>
<style>
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
    <title>Delete customer</title>
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
<?php include 'kebeleheader.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">customer Status
						<button class="btn" align="center"> 
                        <a href="addcustomer.php" class="btn">Add customer</a>
                        </button>
						</h1>
                    
                
				
				
<?php
$customer_id  = $_GET["customer_id"];

// sql to delete customer
$sql = "DELETE FROM customer WHERE customer_id='$customer_id'";

if ($conn->query($sql) === TRUE) {
    echo "customer deleted successfully";  echo '</br>';
} else {
    echo "Error deleting customer: " . $conn->error;  echo '</br>';
}

// sql to delete familys
$sql = "DELETE FROM family WHERE customer_id='$customer_id'";

if ($conn->query($sql) === TRUE) {
    echo "familys deleted successfully";  echo '</br>';
} else {
    echo "Error deleting familys: " . $conn->error;  echo '</br>';
}

// sql to delete payments
$sql = "DELETE FROM payment WHERE customer_id='$customer_id'";

if ($conn->query($sql) === TRUE) {
    echo "Payments deleted successfully";  echo '</br>';
} else {
    echo "Error deleting Payments: " . $conn->error;  echo '</br>';
}
      
$conn->close();		
		
?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
