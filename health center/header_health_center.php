<?php
  session_start(); 
include'../connection.php';
$username = $_SESSION["healthCenterLoggedIn"];
  if (!isset($_SESSION['healthCenterLoggedIn'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
    unset($_SESSION['healthCenterLoggedIn']);
    header("location: ../login_form.php");
  }
?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color:dodgerblue;"><img src="../images/insurance.jpg">
            
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="homecasher.php" style="font-size:15px;">Ethiopan Health Insurance for Debre berhan Branch</a>
            </div>

            <div class="header-right">
			
                 <a href="../logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                             <?php
                            $healthCenterLoggedIn = $_SESSION["healthCenterLoggedIn"];

                        $select="SELECT *FROM red_cross WHERE username='$healthCenterLoggedIn'";

                        $run=mysqli_query($conn,$select);

                        while (
                            $row_user=mysqli_fetch_array($run)){
                                                  ?>

                              <?php } ?>


                            <div class="inner-text">
                                


                                   <?php
                                    if(!isset($_SESSION["healthCenterLoggedIn"])){
                                        header("Location: ../login_form.php");
                                    }else {
                                        echo "welcome, ".$_SESSION["healthCenterLoggedIn"];
                                    }
                                ?>




<!--------------php filel here ______-------->



                            <br />
                              
                            </div>
                        </div>

                    </li>

                    <li>
                      <a href="home_health_center.php"><i class="fa fa-home "></i>Home</a >  
                 </li> 


                 <li>
                      <a href="customer_health_center.php"><i class="fa fa-users "></i>Customer</a >  
                 </li> 
                 
                                 <li>
                      <a href="policy_health_center.php"><i class="fa fa-pencil-square-o "></i>POLICY</a>
                          
                 </li>     
                  
                 <li>
                      <a href="paymentfor_health_center.php"><i class="fa fa-dollar "></i>PAYMENTS</a>
                            
                 </li>    
                    <li>
                      <a href="manage_casher.php"><i class="fa fa-users "></i>Manage Casheir</a>
                            
                 </li>    
                 <li>
                      <a href="view_your_info.php"><i class="fa fa-user "></i>Profile</a>
                            
                 </li>  

                 <li>
                      <a href="Settings.php"><i class="fa fa-credit-card "></i>Settings</a>
                            
                 </li>  
                                      
                </ul>

            </div>
		

        </nav>
		 
		  
	
   