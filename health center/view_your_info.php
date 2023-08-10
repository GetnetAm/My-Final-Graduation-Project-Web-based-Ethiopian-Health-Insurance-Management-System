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

    @media(max-width: 750px){

    #page-wrapper{
        position: absolute;
        top: 800px;
        left: 0;
        text-align: center;
    }


    .navbar-side {
        z-index: 1;
        position: absolute;
        width: 100%;
    }
    


    }




</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>red cross Status</title>
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
include 'header_health_center.php'; 
$healthCenterLoggedIn = $_SESSION["healthCenterLoggedIn"];
?>
      

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">


<div class="card">

    
</div>





 <h1 class="page-head-line" style="color: dodgerblue;">Health Center information</h1>


<table>
    <thead>
        <tr>
            <th>Health Center Name</th>
            <th>Health Center Type</th>
            <th>Username</th>
            <th>Password</th>
            <th>Casher Name</th>
           
            <th>Phone</th>
             <th>E-mail</th>
            <th>Addiress</th>
                   


        </tr>
    </thead>


<tbody>


                        <?php include '../connection.php';


                        $select="SELECT *FROM health_center WHERE username='$healthCenterLoggedIn'";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $health_center_id=$row_user['health_center_id'];
                        $health_center_name=$row_user['health_center_name'];

                         $health_center_type=$row_user['health_center_type'];
                        $casher_id=$row_user['casher_id'];
                         $username=$row_user['username'];
                        $password=$row_user['password'];

                        $casher_name=$row_user['name'];
                        $phone=$row_user['phone'];

                        $email=$row_user['email'];
                        $address=$row_user['address'];
                     
                        ?>

                   <td><?php echo $health_center_name ?></</td>

                    <td><?php echo $health_center_type ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $password ?></td>
                     
                    <td><?php echo $casher_name ?></td>
                     <td><?php echo $phone ?></td>

                      <td><?php echo $email ?></td>
                       <td><?php echo $address ?></td>

                          
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
