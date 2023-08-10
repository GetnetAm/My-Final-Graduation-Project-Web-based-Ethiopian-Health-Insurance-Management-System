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
            height: 200px;
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
        top: 900px;
        left: 0;
        text-align: center;

    }
     .navbar-side {
        z-index: 1;
        position: absolute;
        width: 260px;
    }

    .navbar {
        border-radius: 0px;
    }

    
}







</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Profile Status</title>
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
include 'customerheader.php'; 
$customerUserName = $_SESSION["customerLogIn"];
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

 <h1 class="page-head-line">ሙሉ መረጃ</h1>


<table>
    <thead>
        <tr>
            
            <th>መለያ ቁጥር</th>
            <th>ሙሉ ስም</th>
            <th>ስልክ ቁጥር</th>
            <th>ጾታ</th>
            <th>የቤተሰብ ብዛት</th>
            <th>ቀበሌ</th>
            <th>ወረዳ</th>
          


        </tr>
    </thead>


<tbody>


                        <?php include '../connection.php';


                        $select="SELECT *FROM customer WHERE username='$customerUserName'";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $customer_id=$row_user['customer_id'];
                        $username=$row_user['full_name'];
                        $phone=$row_user['phone'];
                        $sex=$row_user['sex'];
                        //$birth_date=$row_user['birth_date'];
                        $no_family=$row_user['no_family'];

                        $kebele=$row_user['kebele'];
                        $woreda=$row_user['woreda'];
                        $images=$row_user['image'];
                        ?>

                 
                    <td><?php echo $customer_id ?></td>
                      <td><?php echo $username ?></td>

                    <td><?php echo $phone ?></td>
                   
                    <td><?php echo $sex ?></td>
                     <td><?php echo $no_family ?></td>
                    <td><?php echo $kebele ?></td>
                     <td><?php echo $woreda ?></td>
                    </tr>

                <?php } ?>

                     </tbody>
                    </table>
   







<h1 class="page-head-line">የቤተሰብ መረጃ</h1>


<table>
    <thead>
        <tr>
            
            <th>መለያ ቁጥር</th>
            <th>ሙሉ ስም</th>
            <th>ስልክ ቁጥር</th>
            <th>ጾታ</th>
            <th>የዝምድና ሁኔታ</th>
            <th>ዕድሜ</th>
            
          


        </tr>
    </thead>


<tbody>





                        <?php include '../connection.php';


                        //$select="SELECT *FROM family WHERE username='$customerUserName'";
                        $select="SELECT *FROM family WHERE customer_id='$customer_id'";


                        $run=mysqli_query($conn,$select);

                        while (
                     $row_user=mysqli_fetch_array($run)){
                        $customer_id=$row_user['customer_id'];
                        $fname=$row_user['name'];
                        $phone=$row_user['phone'];
                        $sex=$row_user['sex'];
                        //$birth_date=$row_user['birth_date'];
                        $relationship=$row_user['relationship'];

                        $age=$row_user['age'];
                    
                        ?>

                    <td><?php echo $customer_id ?></td>
                     <td><?php echo $fname ?></td>

                    <td><?php echo $phone ?></td>
                   
                    <td><?php echo $sex ?></td>
                     <td><?php echo $relationship ?></td>
                           <td><?php echo $age ?></td>

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
