<?php
  session_start(); 
include'../connection.php';
$username = $_SESSION["customerLogIn"];
  if (!isset($_SESSION['customerLogIn'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    unset($_SESSION['customerLogIn']);
    header("location: ../login_form.php");
  }
?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation"> <img src="../images/insurance.jpg">
      
        
	
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
                            $customerUserName = $_SESSION["customerLogIn"];

                        $select="SELECT *FROM customer WHERE username='$customerUserName'";

                        $run=mysqli_query($conn,$select);

                        while (
                            $row_user=mysqli_fetch_array($run)){
                        $images = $row_user["image"];
                             ?>
                            <img src="../upload/<?php echo $images;?>" class="img-thumbnail" />
                              <?php } ?>

                            <div class="inner-text">
                                


                                   <?php
                                    if(!isset($_SESSION["customerLogIn"])){
                                        header("Location: ../login_form.php");
                                    }else {
                                        echo "welcome, ".$_SESSION["customerLogIn"];
                                    }
                                ?>




<!--------------php filel here ______-------->



                            <br />
                              
                            </div>
                        </div>

                    </li>

                    <li>
                      <a href="homecustomer.php"><i class="fa fa-home "></i>Home /አጠቃላይ</a >  
                 </li> 
                     <li>
                      <a href="profile.php"><i class="fa fa-user "></i>Profile /ማህደር</a>
                            
                 </li>
                  <li>
                      <a href="policycustomer.php"><i class="fa fa-pencil-square-o "></i>POLICY /ደንብ</a>
                          
                 </li>     

                
                 <li>
                      <a href="news.php"><i class="fa fa-life-saver "></i>Notification/ማስታወቂያ</a >  
                 </li> 

                 

                 <li>
                      <a href="Settings.php"><i class="fa fa-credit-card "></i>Settings /መቸት</a>
                            
                 </li>  
  


                 <li>
                      <a href="comments.php"><i class="fa fa-pencil-square-o "></i>Reporte Your Complain /ቅሬታ</a>
                            
                 </li>  
                     <li>
                      <a href="identifcation_card.php"><i class="fa fa-book "></i>Identificaion Card /መታወቂያ ካርድ</a>
                            
                 </li>
                   <li>
                      <a href="your_payment.php"><i class="fa fa-dollar "></i>Payment /ክፍያ</a>
                            
                 </li>

  
                     <li>
                      <a href="manual3.php"><i class="fa fa-credit-card "></i>Help /እርዳታ</a>
                            
                 </li>
                </ul>

            </div>
		

        </nav>
		 
		  
	
   