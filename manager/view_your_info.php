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







*{
            margin: 0px;
            padding: 0px;
        }

        body{
            font-family: arial;
        }
        .card{
            width: 30%;
            margin: 40px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px black;
        }

        .image img{
            width: 100%;
            border-top-right-radius:5px;
            border-top-left-radius: 5px;
        }
        
        .title{
            text-align: center;
            padding: 5px;
        }




</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manager Status</title>
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
include 'header.php'; 
$managerLogIn = $_SESSION["managerLogIn"];
?>
      

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">


<div class="card">
    <div class="image">
       <img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">
        
    </div>

    
</div>





 <h1 class="page-head-line">Your information</h1>


<table>
	<thead>
		<tr>
            <h3>Full Name</h3>

        	<th>Manager Id</th>
			<th>User Name</th>
			<th>E-mail</th>
			<th>Phone</th>
            <th>Sex</th>
            <th>Martial Status</th>
            <th>Addiress</th>
            <th>School Level</th>
          


		</tr>
	</thead>


<tbody>


                        <?php include '../connection.php';


                        $select="SELECT *FROM manager WHERE username='$managerLogIn'";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $user_id=$row_user['manager_id'];
                        $username=$row_user['username'];
                        $password=$row_user['password'];
                        $email=$row_user['email'];
                         $full_name=$row_user['name'];

                        $sex=$row_user['sex'];
                       // $birth_date=$row_user['birth_date'];
                        $maritial_status=$row_user['marital_status'];

                        $address=$row_user['address'];
                        $school_level=$row_user['school_level'];
                        $images=$row_user['image'];
                        ?>
                    

                   <h4><?php echo $full_name ?></</h4>

                    <td><?php echo $user_id ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $password ?></td>
                    <td><?php echo $email ?></td>
                      <td><?php echo $sex ?></td>
                      <td><?php echo $maritial_status ?></td>
                            <td><?php echo $address ?></td>
                          <td><?php echo $school_level ?></td>
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
