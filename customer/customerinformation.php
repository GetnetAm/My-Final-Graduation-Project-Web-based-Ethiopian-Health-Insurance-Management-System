<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
	
}


input[type=submit]:hover {
    background-color: #45a049;
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
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>customer's Status</title>
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
<?php include 'customerheader.php'; 
$username = $_SESSION["customerLogIn"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ደምበኛችን የክፍያ ሁኔታዎ ይህ ነው</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$customer_id = $_GET["customer_id"];
	}
	            //   PRINTS customer's info
	//$sql = "SELECT * from customer where ='$customer_id'";

	$sql = "SELECT * from customer where customer_id='$customer_id'";
	$result = $conn->query($sql);
	//$policy_id = "";
	//$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
?>


<?php
		
		$c_id      = $row["customer_id"];
		$username=$row['username'];
		
	
    }
			

echo '</div>';
	
	
	
	


                   //prints payments 
	$sql = "SELECT * FROM payment where customer_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>የደረሰኝ ቁጥር</th>\n";
    echo "    <th>የደምበኛ መለያ ቁጥር</th>\n";
    echo "    <th>የከፈሉበት ባንክ ስም</th>\n";
    echo "    <th>የገንዘብ መጠን</th>\n";
	echo "    <th>የተከፈለበት ዘመን</th>\n";
    echo "  </tr>";
	echo "<br>\n";
	
	;
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["recipt_no"]."</td>\n";
		echo "    <td>".$row["customer_id"]."</td>\n";
		echo "    <td>".$row["bank_name"]."</td>\n";
		echo "    <td>".$row["amount"]."</td>\n";
		echo "    <td>".$row["year"]."</td>\n";
				
		echo "  </tr>";
	}
	}
	
	echo "</table>\n";


//this is deleted part
	
	

echo "\n";


	
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
