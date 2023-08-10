<?php
  session_start(); 
include'../connection.php';
$username = $_SESSION["managerLogIn"];
  if (!isset($_SESSION['managerLogIn'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['managerLogIn']);
    header("location: ../login.php");
  }
?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: dodgerblue;"><img src="../images/insurance.jpg">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="home.php" style="font-size:13px;">Ethiopan Health Insurance for Debre berhan Branch</a>
            </div>

            <div class="header-right">
			
                 <a href="<?php echo "../logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out fa-2x" style="color: white;"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse" style="position: sticky;">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                                 <?php
                            $managerLogIn = $_SESSION["managerLogIn"];

                        $select="SELECT *FROM manager WHERE username='$managerLogIn'";

                        $run=mysqli_query($conn,$select);

                        while (
                            $row_user=mysqli_fetch_array($run)){
                        $images = $row_user["image"];
                             ?>
                            <img src="../upload/<?php echo $images;?>" class="img-thumbnail" />
                              <?php } ?>

                            <div class="inner-text">
                               

<!---------------------php 



    ------------>
                                        <?php
                                    if(!isset($_SESSION["managerLogIn"])){
                                        header("Location: ../login_form.php");
                                    }else {
                                        echo "welcome, ".$_SESSION["managerLogIn"];
                                    }
                                ?>




                            <br />
                              
                            </div>
                        </div>

                    </li>

                    <li>
                      <a href="home.php"><i class="fa fa-home "></i>Home</a >  
                 </li>
                 <li>
                      <a href="customer.php"><i class="fa fa-users "></i>Customer</a >  
                 </li> 
                 <li>
                      <a href="health_center.php"><i class="fa fa-user-md fa" ></i>Health Center</a>
                            
                 </li>  
                 <li>
                      <a href="red_cross.php"><i class="fa fa-users"></i>Red Cross</a>
                            
                 </li>
                 <li>
                      <a href="kebeleadmin.php"><i class="fa fa-users "></i>Kebele Admin</a>
                            
                 </li> 
                 <li>
                      <a href="policy.php"><i class="fa fa-pencil-square-o "></i>POLICY</a>
                          
                 </li>     
                   <li>
                      <a href="service.php"><i class="fa fa-book "></i>Service Information</a>
                          
                 </li> 
                    </li>   
                   <li>
                      <a href="news.php"><i class="fa fa-pencil-square-o "></i>News</a>
                            
                 </li>  
                 <li>
                      <a href="payment.php"><i class="fa fa-dollar"></i>PAYMENTS</a>
                            
                 </li>    
                 <li>
                      <a href="view_comment.php"><i class="fa fa-comment "></i>VIEW COMMENTS</a>
                            
                
                   
                    <li>

                  <li>
                      <a href="view_your_info.php"><i class="fa fa-user "></i>Profile</a>
                            
                
                   
                    <li>

                      <a href="Settings.php"><i class="fa fa-pencil-square-o"></i>Settings</a>
                            
                 </li> 
                    
                     
                </ul>

            </div>
		

        </nav>
		 
		  
	
   