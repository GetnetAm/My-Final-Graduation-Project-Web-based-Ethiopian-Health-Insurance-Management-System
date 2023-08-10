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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert red_cross</title>
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

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
           
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Red Cross 
						<button class="btn" align="center"> 
                        <a href="addred_cross.php" class="btn">Add red_cross</a>
                        </button>
						</h1>
                    
                
				
				
<?php
   include'../connection.php';


	    $red_cross_id       = $_POST["red_cross_id"];
	    $red_cross_branch_name       = $_POST["red_cross_branch_name"];
	     $username       = $_POST["username"];
		$password = $_POST["password"];
        $doesTheRedcrossExistPreviously = false;

		$phone           = $_POST["phone"];
		$email           = $_POST["email"];
		$address           = $_POST["address"];

        ?>

<?php
$check=0;
if(isset($_POST['submit']))
{
        if(strlen($_POST['red_cross_id'])>30)
        {
        $check+=1;
       echo "not valid id ";echo "<br>\n";
        
        }
        if($_POST['red_cross_id']=="")
        {
        $check+=1;
        echo "pleas enter red cross id";echo "<br>\n";
        
        }
        }
        ?>


    <?php 
            if(isset($_POST['submit']))
            {
                if(is_numeric($_POST['red_cross_branch_name'])||strlen($_POST['red_cross_branch_name'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid Name</span>";echo "<br>\n";
                }
                if($_POST['red_cross_branch_name']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter your Health Center branch Name</span>";echo "<br>\n";
                }
                }
                ?>
   <?php 


            if(isset($_POST['submit']))
            {

                $u="SELECT username from red_cross where username='$username'";
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
                    $doesTheRedcrossExistPreviously = true;

                    //echo "user name is already taken in the privies day";
                    echo "<span class='style21'>user name is already taken in the privies day</span>";echo "<br>\n";
                }
                else{
                    echo'<img src="../images/check3.png" width="30" height="30">';          
                          }


                }

                ?>

<?php 
            if(isset($_POST['register']))
            {
                if(strlen($_POST['password'])>15)
                {
                $check+=1;

                echo "<span class='style21'>Password can not be morethan 15 characters.</span>";echo "<br>\n";
                }
                if($_POST['password']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter a password</span>";echo "<br>\n";
                }
                else if(strlen($_POST['password'])<4)
                {
                $check+=1;

                echo "<span class='style21'>Minimum characters for a password is 4.</span>";echo "<br>\n";
                }

                }
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
    echo "<span class='style21'>Please enter your e-mail address</span>";
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
                if(strlen($_POST['address'])>30)
                {
                $check+=1;
                echo "<span class='style21'>Not a valid username</span>";echo "<br>\n";
                }
                if($_POST['address']=="")
                {
                $check+=1;
                echo "<span class='style21'>Please enter your username</span>";echo "<br>\n";
                }
                }
                ?>


<?php
 if(isset($_POST['submit'])&&$check==0)
            {
                
        $password_enc=md5($password);

}
?>


<?php
if (empty($red_cross_id) ||empty($red_cross_branch_name)||empty($username)||empty($password_enc) ||empty($phone)||empty($email)||empty($address)) {
    echo "pleas full fill all";
}



    //array_push($errors, );

    //echo "do not mach the two password";
else{

		
	$sql = "INSERT INTO red_cross "."VALUES('$red_cross_id','$red_cross_branch_name','$username','$password_enc', '$phone', '$email', '$address')";
    if(!$doesTheRedcrossExistPreviously)
	
	if ($conn->query($sql) === true) {

			echo "New Red Cross ADDED";  echo '</br>';
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
