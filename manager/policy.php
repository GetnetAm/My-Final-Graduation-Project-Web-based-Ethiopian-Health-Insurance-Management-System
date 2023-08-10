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
                        <h1 style="color:gold; background-color:black; text-align: center;" class="page-head-line">Policy Informations 
                            <button class="btn" align="center"> 
                        <a href="add_policy.php" class="btn">Add Policy</a>
                        </button>

			
						</h1>
                    </div>
                </div>
                
           
                <?php
include'../connection.php';
if (isset($_GET['del'])) {
    $del_id=$_GET['del'];
    $delete="DELETE FROM policy WHERE policy_id='$del_id'";
     $run_delete=mysqli_query($conn,$delete);
    if ($run_delete===true) {
 echo "your are succsesfuly deleted";
        }
}

                ?>


<table>
    <thead>
        <tr>
            <th>Policy Id</th>
            <th>Acadamic_Year</th>
            <th>one to four Family</th>
            <th>Five to eight family</th>
            <th>nine to twelve family</th>
            <th>Update</th>
            <th>Remove</th>

        </tr>
    </thead>


<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM policy";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $policy_id=$row_user['policy_id'];
                        $anaualy=$row_user['anaualy'];
                        $one_four=$row_user['one_four'];
                        $five_egiht=$row_user['five_egiht'];
            

                        $nine_twelve=$row_user['nine_twelve'];
                        //$free=$row_user['free'];

                        ?>


                    <td><?php echo $policy_id ?></td>
                    <td><?php echo $anaualy ?></td>
                    <td><?php echo $one_four ?></td>
                    <td><?php echo $five_egiht ?></td>
                      <td><?php echo $nine_twelve ?></td>
                       
                 
                        <td><a class="btn btn-green" href="edit_policy.php?policy_id=<?php echo $policy_id;?>">Update</a></td>;
                      <td><a class="btn btn-danger" href="policy.php?del=<?php echo $policy_id ?>">Delete</a></td>
                          
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>

                    <!-- Notification part -->


            <div class="col-md-14" style="margin-top: 50px;">
                        <h1 style="color:gold; background-color:black; text-align: center;"  class="page-head-line">Notify customer 
                            <button class="btn" align="center"> 
                        <a href="add_notification.php" class="btn">Add New Notification</a>
                        </button>

            
                        </h1>
                    </div>



                <?php
include'../connection.php';
if (isset($_GET['delnoti'])) {
    $del_id=$_GET['delnoti'];
    $delete="DELETE FROM notification WHERE notification_id='$del_id'";
     $run_delete=mysqli_query($conn,$delete);
    if ($run_delete===true) {
 echo "your are succsesfuly deleted";
        }
}

                ?>


<table>
    <thead>
        <tr>
            <th>Notification Id</th>
            <th>Date</th>
            <th>Message</th>
            <th>Update</th>
            <th>Remove</th>

        </tr>
    </thead>


<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM notification";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $notification_id=$row_user['notification_id'];
                        $date=$row_user['date'];
                        $notification=$row_user['notification'];
                       
            


                        ?>


                    <td><?php echo $notification_id ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $notification ?></td>
                      <td><a class="btn btn-green" href="edit_notification.php?notification_id=<?php echo $notification_id;?>">Update</a></td>;
                   
                      <td><a class="btn btn-danger" href="policy.php?delnoti=<?php echo $notification_id;?>">Delete</a></td>
                          
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>
   
   



    <!-- Banks/agent part -->


            <div class="col-md-14" style="margin-top: 50px;">
                        <h1 style="color:gold; background-color:black; text-align: center;"  class="page-head-line">Bank or Agent Information 
                            <button class="btn" align="center"> 
                        <a href="add_bank_information.php" class="btn">Add New Bank</a>
                        </button>

            
                        </h1>
                    </div>



                <?php
include'../connection.php';
if (isset($_GET['delagent'])) {
    $del_id=$_GET['delagent'];
    $delete="DELETE FROM agent WHERE agent_id='$del_id'";
     $run_delete=mysqli_query($conn,$delete);
    if ($run_delete===true) {
 echo "your are succsesfuly deleted";
        }
}

                ?>


<table>
    <thead>
        <tr>
            <th>Bank Id</th>
            <th>Bank Name</th>
            <th>Bank Account Number</th>
            <th>Update</th>
            <th>Remove</th>

        </tr>
    </thead>


<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM agent";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $agent_id=$row_user['agent_id'];
                        $bank_name=$row_user['name'];
                        $account=$row_user['accunt'];
                       
            


                        ?>


                    <td><?php echo $agent_id ?></td>
                    <td><?php echo $bank_name ?></td>
                    <td><?php echo $account ?></td>
                      <td><a class="btn btn-green" href="edit_bank_information.php?agent_id=<?php echo $agent_id;?>">Update</a></td>;
                   
                      <td><a class="btn btn-danger" href="policy.php?delagent=<?php echo $agent_id;?>">Delete</a></td>
                          
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
