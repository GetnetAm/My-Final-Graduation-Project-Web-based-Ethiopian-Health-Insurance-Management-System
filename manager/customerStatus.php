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
<?php include 'header.php'; 
//$username = $_SESSION["username"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">customer's Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$customer_id = $_GET["customer_id"];
	}
	            //   PRINTS customer's info
	$sql = "SELECT * from customer where customer_id='$customer_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
?>
			<img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">
<?php
		echo "<label for=\"fname\">customer ID</label>";
	    echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"customer_id\" placeholder=\"customers id..\" value=\"$row[customer_id]\">";
		echo "<label for=\"fname\">customer PASSWORD</label>";
	    echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"customer_password\" placeholder=\"customer password..\" value=\"$row[customer_password]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"name\" placeholder=\"customers Name..\" value=\"$row[full_name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"sex\" placeholder=\"customers gender..\" value=\"$row[sex]\">";
		// echo "<label for=\"fname\">BIRTH DATE</label>";
		// echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"birth_date\" placeholder=\"customers Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"marital_status\" placeholder=\"customers Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">AGE</label>";
		echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"age\" placeholder=\"customers AGE..\" value=\"$row[age]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"phone\" placeholder=\"customers Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">EMAIL</label>";
		echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"email\" placeholder=\"customers Email..\" value=\"$row[email]\">";
		echo "<label for=\"fname\">KEBELE</label>";
		echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"kebele\" placeholder=\"customers KEBELE..\" value=\"$row[kebele]\">";
		echo "<label for=\"fname\">WOREDA</label>";
		echo "<input disabled type=\"text\" customer_id=\"fname\" name=\"woreda\" placeholder=\"customers WOREDA..\" value=\"$row[woreda]\">";
	
		//$policy_id = $row["policy_id"];
		$c_id      = $row["customer_id"];
		//$a_id  = $row["agent_id"];
		//$agent_id = $row["agent_id"];

	
    }
		echo "<br>\n";
		
	    echo "<br>\n";
	
	        

	             // prints family infos 
	$sql = "SELECT * FROM family where customer_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>GENDER</th>\n";
    //echo "    <th>BIRTH DATE</th>\n";
    echo "    <th>AGE</th>\n";

	echo "    <th>RELATIONSHIP</th>\n";
	 echo "    <th>PHONE</th>\n";
	   echo "  </tr>";
	
	
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["sex"]."</td>\n";
		//echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["age"]."</td>\n";
		echo "    <td>".$row["relationship"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		$family_id = $row["family_id"];

		
		
		
		echo "  </tr>";
	}
	}
	
	echo "</br>\n";
	echo "</br>\n";
	echo '<b>family</b>'; echo '&nbsp';echo '&nbsp';echo '&nbsp';
	
	
	
                       //prints payments 
	$sql = "SELECT * FROM payment where customer_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>RECIPT NO</th>\n";
    echo "    <th>customer ID</th>\n";
    echo "    <th>BANK NAME</th>\n";
    echo "    <th>AMOUNT</th>\n";
	echo "    <th>YEAR</th>\n";
    echo "    <th>STATUS</th>\n";
	
    echo "  </tr>";
	echo "<br>\n";
	
	echo '<b>Payments</b>';  echo '&nbsp';echo '&nbsp';echo '&nbsp';
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["recipt_no"]."</td>\n";
		echo "    <td>".$row["customer_id"]."</td>\n";
		echo "    <td>".$row["bank_name"]."</td>\n";
		echo "    <td>".$row["amount"]."</td>\n";
		echo "    <td>".$row["year"]."</td>\n";
		echo "    <td>".$row["status"]."</td>\n";
		
		
		echo "  </tr>";
	}
	}
	
	echo "</table>\n";


echo "\n";


	
?>

<h3>Aginces Cover payment for the customer </h3>

<table>
    <thead>
        <tr>
            <th>Customer Id</th>
            <th>Paymented Date</th>
            <th>Payment Reasion</th>
            <th>Total Payment</th>
         

        </tr>
    </thead>


<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM pyment_history where customer_id='$c_id'";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $pyment_history_id=$row_user['pyment_history_id'];
                        $customer_id=$row_user['customer_id'];
                        $date=$row_user['date'];
                          $reasion=$row_user['reasion'];
                        $total_payment=$row_user['total_payment'];

                      

                        ?>


                    <td><?php echo $customer_id ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $reasion ?></td>
                     <td><?php echo $total_payment ?></td>

                   
                                                
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>
   


                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
