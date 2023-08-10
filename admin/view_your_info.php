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
.btn{
	color: white;
	background-color: green;
	
	border: gold solid 5px;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}



</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adminstrator Status</title>
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
<?php 
include 'adminheader.php'; 
$adminLogIn = $_SESSION["adminLogIn"];
?>
      

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">




 <h1 class="page-head-line">Your information</h1>


<table>
	<thead>
		<tr>
            <h3>Full Name</h3>
        	<th>Admin Id</th>
			<th>User Name</th>
			<th>E-mail</th>
			<th>Phone</th>

		</tr>
	</thead>


<tbody>


                        <?php include '../connection.php';


                        $select="SELECT *FROM admin WHERE username='$adminLogIn'";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $admin_id=$row_user['admin_id'];
                        $username=$row_user['username'];
                         $email=$row_user['email'];
                        $phone=$row_user['phone'];
                       
                         $full_name=$row_user['full_name'];

                        ?>

                   <h4><?php echo $full_name ?></</h4>

                    <td><?php echo $admin_id ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $email ?></td>
                     <td><?php echo $phone ?></td>

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
