<!DOCTYPE html>
<html>
<head>
<style>
*{
    margin: 0%;
    padding: 0%;
    box-shadow: border-box;

}
body{
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
}
.content{

    background: gray;
    font-family: 'poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: flex-start;

}
.card{
    position: relative;
    width: 400px;
    height: 700px;
    background: #e6e7e9;
    box-shadow: 6px 6px 20px #121213;
    margin: 10px;
    overflow: hidden;
}


.card .content{
    position: absolute;
    top: 10%;
    left: 10%;
    display: flex;
    align-items: center;
    color: #fff;

    }
.card .content img{
    width: 40px;
    height: 40px;

}
.card .content .title_subtitle{
    margin-left: 8px;
}
.card .content .title_subtitle h3{
    font-weight: 500;
    line-height: 10px;
    margin-top: 7px;
}
.card .content .title_subtitle h3 span{
    font-weight: 800;
}

.card .content .title_subtitle p{
    font-size: 10.5px;
    letter-spacing: 1px;
    margin: 5px 0px 0px 5px;
    color: #767477;
}




.card .content1{
    position: absolute;
    top: 22%;
    left: 10%;
    display: flex;
    align-items: center;
    color: #111;
}
.card .content1 img{
    width: 100px;
    height: 100px;
    position: center;
    border-radius: 5px solid gray;
    box-shadow: 5px darkblue;
    margin-left: 100px;

}

.card .content1 h1{
    width: 5px;
    height: 37px;
    background: #dca53e;
}
.card .content1 .title_subtitle h3{
    font-weight: 500;
    line-height: 10px;
    margin-top: 7px;
}
.card .content1 .title_subtitle h3 span{
    font-weight: 800;
}
.card .content1 .title_subtitle p{
    font-size: 12px;
    letter-spacing: 1px;
    margin: 5px;
    color: #767477;
}


.card ul{
    position: absolute;
    top: 60%;
    left: 17%;
    color: #000;
}
.card ul li{
    list-style-type: none;
    padding: 2px 0px;
}
.card ul li a{
    text-decoration: none;
    color: #000;
    font-size: 12px;
}


.btn{
    margin-top: 1rem;
    display: inline-block;
    padding: 1rem 3.5rem;
    border-radius: .5rem;
    font-size: 1.7rem;
    cursor: pointer;
    background: none;
    color: var(--black);
    box-shadow: var(--box-shadow);
}
.btn{
    background-color: #4CAF50;
    float: right;
    color:white;
    text-decoration:none;   
}
.btn:hover{
    box-shadow: var(--box-shadow-inset);
    color: var(--green);
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

    .card{
        position: absolute;
        left: 0;
        text-align: center;
    }

    .card, .content{
        position: absolute;
        text-align: center;

    }
    
}


</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Certeficate</title>
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
 <div id="page-wrapper" class="page-wrapper">
            
    <div class="row">
        <div class="col-md-12">
             <h1 class="page-head-line">Your Identification Card የአባላት መለያ ካርድ</h1>

              <?php include '../connection.php';


             $select="SELECT *FROM customer WHERE username='$customerUserName'";

             $run=mysqli_query($conn,$select);

             while (
                 $row_user=mysqli_fetch_array($run)){
             $customer_id=$row_user['customer_id'];
             $username=$row_user['full_name'];
             $kebele=$row_user['kebele'];
              $phone=$row_user['phone'];
             $woreda=$row_user['woreda'];
            $no_family = $row_user["no_family"];
             $images = $row_user["image"];

                        ?>
<div class="fileprint">

  <div class="card">
    <!--     <img src="" alt="background">
 -->

    <div class="content">
     <img src="../images/logo.jpg" alt="logo">
      <div class="title_subtitle">
          <h3>Health  <span>insurance</span> </h3>
                        
     </div>
        
</div>
    

<div class="content1">
    <div class="title_subtitle">
      <img style="align-content: center;" src="../upload/<?php echo $images;?>" alt="customer has no profile picture" alt="logo">

      <h3><span><?php echo $username ?></span> </h3>
      <p style="font-size:12px;" >የኢትዮጵያ የጤና መድህን የምስክር ወረቀት</p><br>
     <p>ይህን መታወቂያ የያዘ ግለሰብ የኢትዮጵያ የጤና መድን አባል ስለሆነ በየትኛዎም ሁኔታ እና ቦታ ተገቢዎን አግልግሎት እንዳገኝ  <br>ድርጅቱ ያሳስባል</p>            
 </div>
 </div>

 <ul>
    <li><a href="#">መለያ = <?php echo $customer_id; ?></a></li>
    <li><a href="#">ሙሉ ስም= <?php echo $username ?></li>
    <li><a href="#">ስልክ ቁጥር <?php echo $phone  ?></li>
    <li><a href="#">ቀበሌ: <?php echo $kebele ?></li>
    <li><a href="#">ወረዳ :<?php echo $woreda ?></li>
    <li><a href="#">የቤተሰብ ብዛት ፡ <?php echo $no_family ?></li>
    <p>የኢትዮጵያ ጤና መዲህን ደብረብረሃን ቅርንጫፍ<p>
 </ul>
<div>
            

     <?php } ?>


                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
