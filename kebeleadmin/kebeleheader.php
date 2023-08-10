<?php
  session_start(); 
include'../connection.php';
$username = $_SESSION["kebeleAdminLogIn"];
  if (!isset($_SESSION['kebeleAdminLogIn'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['kebeleAdminLogIn']);
    header("location: ../login.php");
  }

?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color:gray;"><img src="../images/insurance.jpg">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="homekebele.php" style="font-size:15px;">Ethiopan Health Insurance for Debre berhan Branch</a>
            </div>

            <div class="header-right">
			
                 <a href="<?php echo "../logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse" style="position: sticky !important;">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                             <?php
                            $kebeleAdminLogIn = $_SESSION["kebeleAdminLogIn"];

                        $select="SELECT *FROM kebeleadmin WHERE username='$kebeleAdminLogIn'";

                        $run=mysqli_query($conn,$select);

                        while (
                            $row_user=mysqli_fetch_array($run)){
                        $images = $row_user["image"];
                             ?>
                            <img src="../upload/<?php echo $images;?>" class="img-thumbnail" />
                              <?php } ?>

                            <div class="inner-text">
                                <?php
                                    if(!isset($_SESSION["kebeleAdminLogIn"])){
                                        header("Location: ../login_form.php");
                                    }else {
                                        echo "welcome, ".$_SESSION["kebeleAdminLogIn"];
                                    }
                                ?>                           
                                 <br />
                              
                            </div>
                        </div>

                    </li>

                       <li>
                      <a href="homekebele.php"><i class="fa fa-home"></i>Home</a >  
                 </li>

                 <li>
                      <a href="kebelecustomer.php"><i class="fa fa-users "></i>Customer</a >  
                 </li> 
                 
                        <li>
                      <a href="policykebele.php"><i class="fa fa-pencil-square-o"></i>POLICY</a>
                          
                 </li>     
                  
                 <li>
                      <a href="paymentkebele.php"><i class="fa fa-dollar "></i>PAYMENTS</a>
                            
                 </li> 
                  <li>
                      <a href="view_your_info.php"><i class="fa fa-user"></i>View your Information</a>
                            
                 </li>    
                    <li>
                      <a href="Settings.php"><i class="fa fa-credit-card "></i>Settings</a>
                            
                 </li> 
                    
                     
                </ul>

            </div>
		

        </nav>
		 
		  
	
   