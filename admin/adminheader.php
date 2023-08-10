<?php
  session_start(); 
include'../connection.php';
$username = $_SESSION["adminLogIn"];
  if (!isset($_SESSION['adminLogIn'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['adminLogIn']);
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
                            $adminLogIn = $_SESSION["adminLogIn"];

                        $select="SELECT *FROM admin WHERE username='$adminLogIn'";

                        $run=mysqli_query($conn,$select);

                       
                             ?>

                            <div class="inner-text">
                               

<!---------------------php 



    ------------>
                                        <?php
                                    if(!isset($_SESSION["adminLogIn"])){
                                        header("Location: ../login_form.php");
                                    }else {
                                        echo "welcome Admin, ".$_SESSION["adminLogIn"];
                                    }
                                ?>




                            <br />
                              
                            </div>
                        </div>

                    </li>

                     <li>
                      <a href="adminhome.php"><i class="fa fa-home "></i>Home</a >  
                 </li>
                 <li>
                      <a href="manager.php"><i class="fa fa-users "></i>Manager</a >  
                 </li> 
                 <li>
                      <a href="user_account.php"><i class="fa fa-pencil-square-o "></i>User Account</a>
                            
                 </li>  
                                
                   <li>
                      <a href="view_your_info.php"><i class="fa fa-user "></i>View your Information</a>
                            
                 </li>    
                  <li>
                      <a href="backup_page.php"><i class="fa fa-pencil-square-o "></i>Automatic Backup</a>
                            
                 </li>    
                    <li>
                      <a href="Settings.php"><i class="fa fa-credit-card "></i>Settings</a>
                            
                 </li> 
                    
                     
                    
                     
                </ul>

            </div>
        

        </nav>
         
          
    
   