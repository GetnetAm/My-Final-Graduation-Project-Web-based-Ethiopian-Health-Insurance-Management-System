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
    <title>Policy</title>

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
                        <h1 style="color:gold; background-color:black;text-align: center;" class="page-head-line">Service Information
                            <button class="btn" align="center"> 
                        <a href="add_service.php" class="btn">Add new Service</a>
                        </button>

			
						</h1>
                    </div>
                </div>
                
           

                <?php
include'../connection.php';
if (isset($_GET['del_service'])) {
    $del_id=$_GET['del_service'];
    $delete="DELETE FROM service WHERE service_id='$del_id'";
     $run_delete=mysqli_query($conn,$delete);
    if ($run_delete===true) {
 echo "your are succsesfuly deleted";
        }
}

                ?>

<table>
    <thead>
        <tr>
            <th>Service Title</th>
            <th>Service Discription</th>
            <th>Update</th>
            <th>Remove</th>

        </tr>
    </thead>


<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM service";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $service_id=$row_user['service_id'];
                        $servece_name=$row_user['service_name'];
                        $service_discription=$row_user['service_discription'];
                       
            


                        ?>

                    <td><?php echo $servece_name ?></td>
                    <td><?php echo $service_discription ?></td>


                        <td><a class="btn btn-green" href="edit_service.php?service_id=<?php echo $service_id;?>">Update</a></td>;
                      <td><a class="btn btn-danger" href="service.php?del_service=<?php echo $service_id;?>">Delete</a></td>
                          
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>







                        
		  
		  
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->



	
</body>
</html>
