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
include 'red_cross_header.php'; 
$redCrossLoggedIn = $_SESSION["redCrossLoggedIn"];
?>
      

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">


<div class="card">

    
</div>





 <h1 class="page-head-line" style="color: red;">Red Cross information</h1>


<table>
    <thead>
        <tr>
            <th>Red Cross Branch Name</th>
            <th>User Name</th>
            <th>Password</th>
           
            <th>Phone</th>
             <th>E-mail</th>
            <th>Addiress</th>
                   


        </tr>
    </thead>


<tbody>


                        <?php include '../connection.php';


                        $select="SELECT *FROM red_cross WHERE username='$redCrossLoggedIn'";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $red_cross_id=$row_user['red_cross_id'];
                        $branch_name=$row_user['red_cross_branch_name'];
                        $username=$row_user['username'];
                        $password=$row_user['password'];

                        $phone=$row_user['phone'];
                        $email=$row_user['email'];
                        $address=$row_user['address'];
                     
                        ?>

                   <td><?php echo $branch_name ?></</td>

                    <td><?php echo $username ?></td>
                    <td><?php echo $password ?></td>
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
