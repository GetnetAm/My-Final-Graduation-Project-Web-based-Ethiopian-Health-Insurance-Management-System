<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
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
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.style21 {color: red;}

</style>
    <meta charset="utf-8" />
    <meta full_name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert customer</title>
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
<?php include 'kebeleheader.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Customer
                        <button class="btn" align="center"> 
                        <a href="addcustomer.php" class="btn">Add Customer</a>
                        </button>
                        </h1>
                    
                
                
                
<?php
   if(isset($_POST['submit']))
{


        $customer_id       = $_POST["customer_id"];
        $customer_password = $_POST["customer_password"];
        $full_name            = $_POST["full_name"];
        $sex             = $_POST["sex"];
         $username             = $_POST["username"];
         $doesTheCustomerExistPreviously = false;


        //$birth_date      = $_POST["birth_date"];
        $maritial_status = $_POST["maritial_status"];
        $age             = $_POST["age"];
        $phone           = $_POST["phone"];
        $email           = $_POST["email"];

        $kebele         = $_POST["kebele"];
        $woreda         = $_POST["woreda"];
        $no_family         = $_POST["no_family"];


        //$policy_id       = $_POST["policy_id"];
        //$agent_id        = $_POST["agent_id"];
        
        $family_id              = $_POST["family_id"];
        $family_full_name            = $_POST["family_name"];
        $family_sex             = $_POST["sex"];
        //$family_birth_date      = $_POST["family_birth_date"];
        $family_age             = $_POST["family_age"];
        $family_relationship    = $_POST["family_relationship"];
        $family_phone           = $_POST["family_phone"];

        $image=$_FILES['user_image']['name'];
        $tmp_full_name=$_FILES['user_image']['tmp_name'];


}
?>


<?php
$check=0;
if(isset($_POST['submit']))
{
        if(strlen($_POST['customer_id'])>15)
        {
        $check+=1;
    echo "<span class='style21'>Please enter Valid id </span>";echo "<br>\n"; 
        
        }
        if($_POST['customer_id']=="")
        {
        $check+=1;
          echo "<span class='style21'>Please enter custoemr id </span>";echo "<br>\n";        
        }
        }
        ?>



<?php 
            if(isset($_POST['submit']))
            {
                if(strlen($_POST['customer_password'])>15)
                {
                $check+=1;

                echo "<span class='style21'>customer password can not be morethan 15 characters.</span>";echo "<br>\n";
                }
                if($_POST['customer_password']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter a customer password</span>";echo "<br>\n";
                }
                else if(strlen($_POST['customer_password'])<4)
                {
                $check+=1;

                echo "<span class='style21'>Minimum characters for a customer password is 4.</span>";echo "<br>\n";
                }

                }
                ?>

   <?php 
            if(isset($_POST['submit']))
            {
                if(is_numeric($_POST['full_name'])||strlen($_POST['full_name'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid user full name</span>";echo "<br>\n";
                }
                if($_POST['full_name']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter full name</span>";echo "<br>\n";
                }
                }
                ?>



    <?php 
            if(isset($_POST['submit']))
            {
                if(is_numeric($_POST['maritial_status'])||strlen($_POST['maritial_status'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid martial information</span>";echo "<br>\n";
                }
                if($_POST['maritial_status']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter maritial status information</span>";echo "<br>\n";
                }
                }
                ?>




 <?php 


            if(isset($_POST['submit']))
            {

                $u="SELECT username from customer where username='$username'";
                echo $username;
                $uu=mysqli_query($conn,$u);

                if(strlen($_POST['username'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid username</span>";echo "<br>\n";
                }
                if($_POST['username']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter your username</span>";echo "<br>\n";
                }

                else if (mysqli_num_rows($uu)>0) {
                    $doesTheCustomerExistPreviously = true;

                    //echo "user name is already taken in the privies day";
                    echo "<span class='style21'>user name is already taken in the privies time</span>";echo "<br>\n";
                }
                else{
                    echo'<img src="../images/check3.png" width="30" height="30">'; echo "<br>\n";

                                   }


                }
            //}
                ?>


        <?php 
            if(isset($_POST['submit']))
            {
                if($_POST['phone']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter your telephone</span>";echo "<br>\n";
                }
                else if(!is_numeric($_POST['phone'])||strlen($_POST['phone'])<9)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid telephone no.</span>";echo "<br>\n";
                }
                }
                ?>




<?php
    if(isset($_POST['submit']))
            {
$email = $_POST['email']; 
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (preg_match($regex, $email)) {
} 
else if($email=="" || $email==" ")
{
$check+=1;
    echo "<span class='style21'>Please enter your e-mail kebele</span>";
}
else if(strlen($_POST['email'])>50){
$check+=1;
    echo "<span class='style21'>Email is too long</span>";echo "<br>";
}
else { 
$check+=1;
     echo "<span class='style21'>". $email . " is an invalid email. Please try again.</span>";echo "<br>\n";
} 
}
?> 

 <?php 
            if(isset($_POST['submit']))
            {
                if(strlen($_POST['kebele'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid kebele information</span>";echo "<br>\n";
                }
                if($_POST['kebele']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter your kebele information</span>";echo "<br>\n";
                }
                }
                ?>

  <?php 
            if(isset($_POST['submit']))
            {
                if(strlen($_POST['woreda'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid woreda information</span>";echo "<br>\n";
                }
                if($_POST['woreda']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter woreda information</span>";echo "<br>\n";
                }
                }
                ?>
 <?php 
            if(isset($_POST['submit']))
            {
                if(strlen($_POST['no_family'])>10)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid number of family</span>";echo "<br>\n";
                }
                if($_POST['no_family']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter number of family</span>";echo "<br>\n";
                }
                }
                ?>
 
 <?php 
            if(isset($_POST['submit']))
            {
                if(is_numeric($_POST['sex'])||strlen($_POST['sex'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid family gender</span>";echo "<br>\n";
                }
                if($_POST['sex']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter family gender information</span>";echo "<br>\n";
                }
                }
                ?>

  <?php 
            if(isset($_POST['submit']))
            {
                if(strlen($_POST['family_age'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid family age</span>";echo "<br>\n";
                }
                if($_POST['family_age']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter family age</span>";echo "<br>\n";
                }
                }
                ?>

  <?php 
            if(isset($_POST['submit']))
            {
                if(is_numeric($_POST['family_relationship'])||strlen($_POST['family_relationship'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid family relationship</span>";echo "<br>\n";
                }
                if($_POST['family_relationship']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter your family relationship</span>";echo "<br>\n";
                }
                }
                ?>
      <?php 
            if(isset($_POST['submit']))
            {
                if($_POST['family_phone']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter family telephone</span>";echo "<br>\n";
                }
                else if(!is_numeric($_POST['family_phone'])||strlen($_POST['family_phone'])<9)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid family telephone no.</span>";echo "<br>\n";
                }
                }
                ?>



              <?php
 if(isset($_POST['submit'])&&$check==0)
            {
                
        $customer_password=md5($customer_password);

}
?>
          

  


<?php
if (empty($customer_id) || empty($email)||empty($woreda)) {

    echo "<span class='style21'>Please completly full fill</span>";echo "<br>\n";}
    //array_push($errors, );

    //echo "do not mach the two customer_password";
else{


        
    $sql = "INSERT INTO customer "."VALUES('$customer_id', '$customer_password', '$full_name','$username','$sex', '', '$maritial_status', '$age', '$phone', '$email', '$kebele', '$woreda', '', '', '$no_family', '$image')";
       
        if(!$doesTheCustomerExistPreviously)
    
    if ($conn->query($sql) === true) {

            echo "New customer ADDED";  echo '</br>';
            move_uploaded_file($tmp_full_name, "../upload/$image");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
        }
        
        
        
        /// family BEING ADDED
   $sql = "INSERT INTO family "."VALUES('$family_id', '$customer_id', '$family_full_name', '$family_sex', '', '$family_age', '$family_relationship', '$family_phone')";
     
     if(!$doesTheCustomerExistPreviously)
    if ($conn->query($sql) === true) {
            echo "New family ADDED";  echo '</br>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
        }
        
    
}
?>


            

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
