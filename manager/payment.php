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
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payments</title>

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
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Payment Informations 
												</h1>
                    </div>
                </div>
                


                <!-- /. ROW  -->


<?php

	
	$sql = "SELECT recipt_no,customer_id,bank_name,amount,year,status FROM payment";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>RECIPT NO</th>\n";
    echo "    <th>customer ID</th>\n";
    echo "    <th>Bank Name</th>\n";
    echo "    <th>AMOUNT</th>\n";
	echo "    <th>Year</th>\n";
    //echo "    <th>Status</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["recipt_no"]."</td>\n";
		echo "    <td>".$row["customer_id"]."</td>\n";
		echo "    <td>".$row["bank_name"]."</td>\n";
		echo "    <td>".$row["amount"]."</td>\n";
		echo "    <td>".$row["year"]."</td>\n";
		//echo "    <td>".$row["status"]."</td>\n";
		
		
		
	}
	
	echo "</table>\n";
	echo "\n";
	
	} else {
    echo "0 results";
}
$conn->close();
?>

    <?php  

include '../connection.php';

$query="SELECT SUM(amount) as 'sumtotal' from payment";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
?>
<div style="background-color: gray; color:white; width: 70%; border-radius:5px solid gold;">
 <h4 style="color:gold">Total customer anual payment</h4>

<?php
echo "Total:".$data['sumtotal'];


?>
   </div>

    <?php  

include '../connection.php';

$query="SELECT AVG(amount) as 'avgtotal' from payment";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
?>
<div style="background-color: gray; color:white; width: 70%; border-radius:5px solid gold;">
 <h4 style="color:gold">Average customer anual payment</h4>

<?php
echo "Total:".$data['avgtotal'];


?>
   </div>



<h2 style="color:dodgerblue; text-align: center;">Aginces payed for the customer </h2>

<table>
    <thead>
        <tr>
            <th>Customer Id</th>
            <th>Paymented Date</th>
            <th>Payment Reasion</th>
            <th>Total Payment for individual customer</th>
           



                    

        </tr>

           </thead>


           





<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM pyment_history";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $pyment_history_id=$row_user['pyment_history_id'];
                        $customer_id=$row_user['customer_id'];
                        $date=$row_user['date'];
                        $reasion=$row_user['reasion'];
                        $total_payment=$row_user['total_payment'];


                        ?>


                        <?php

                       // $sql="SELECT SUM(total_payment) As total_payment FROM pyment_history";

                       // $result=mysqli_query($conn,$sql);
                        //$record=mysqli_fetch_array($result);
                       


                        ?>

              



                    <td><?php echo $customer_id ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $reasion ?></td>
                     <td><?php echo $total_payment ?></td>

                                        

                         
                     </div>
                                     

                    

                   
                                        
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>





<?php  

include '../connection.php';

$query="SELECT SUM(total_payment) as 'sumtotal' from pyment_history";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
?>
<div style="background-color: gray; color:white; width: 80%; border-radius:5px solid gold;">
 <h4 style="color:gold">The total payment coverd by the insurance for customer</h4>

<?php
echo "Total:".$data['sumtotal'];


?>
</div>
<?php  

include '../connection.php';

$query="SELECT AVG(total_payment) as 'avgtotal' from pyment_history";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
?>
<div style="background-color: gray; color:white; width: 80%; border-radius:5px solid gold;">
 <h4 style="color:gold;">the averge for each customer payment coverd by the insurance for customer</h4>

<?php
echo "Total:".$data['avgtotal'];


?>

</div>





            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
