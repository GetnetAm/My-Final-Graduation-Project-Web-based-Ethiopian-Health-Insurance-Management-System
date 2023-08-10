<?php
    include "news_config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['title'] ?> </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" type="text/css" href="my project/my static website dual languch/css/bootstrap-4.0.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../assets/static_style.css">

    <style type="text/css">
 {
    float:right;
    margin: 0;
    padding: 0;

}
ul li {
list-style-type: none;
  float: right;
  margin-: 80%;
     position: sticky !important;
 }
ul li a {
  display: block;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  list-style-type: none;
}
ul li a:hover {
  background-culor: #111111;
}

.main_header {
width: 100%;
 height: 80px;
 background-color: white;
 position: fixed;
 z-index: 1000;


}
.header_option{
    font-family: inherit;
    font-size: 15px;
    font-weight: bold;
}

        *{
            margin: 0px;
            padding: 0px;

        }
        .main_cards{
            float: ;
        }
        .cards{
            width: 60%;
            border-radius: 5px;
            display: inline-block;
            margin-top: 120px;
            box-shadow: 2px 2px 10px black;
            height: 400px;
            margin-left: 50px;

        }
        
        .image img{
            width: 50%;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            height: 200px;
            margin-left: 200px;
            text-align: center;


        }

        .title{
            text-align: center;
            margin-top: 5px;
        }

        .des{
            text-align: center;
            height: 800px;
            margin-top: 5px;
        }


}
button:hover{
    background-color: black;
    color: white;
    transition: .5s;
}
.post{
    font-family: "Poppins",sans-serif;
}
.post p{
    font-size: 19px;
}
.post button{
    padding: 19px;
    background-color:#0066ff;
    color: #ffffff;
    border-radius: 9px;
    border: none;
    cursor: pointer;
}
.post:not(:last-child){
    margin-bottom: 50px;
}
.hide{
    display: none;
}

.date p{
    position: center;
    text-align: center;

}


    </style>



</head>
<body>


<header class="main_header">
<div class="header_option">
    <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
     | <a href="index.php?lang=am"><?php echo $lang['lang_am'] ?></a>

</div>



    <ul class="header_list">
        
            <li class="header_option" id="header_option"><a href="login_form.php"><img style="width:80px; height: 30px;" src="../images/login_part.png"></a></li>
         
            <li style="font-weight: buld; font-size: 30px;"><a href="#"><img style="width: 800px; height:40px" src="../images/insurance.jpg"></a></li>
         </ul>
    </header>
        <br>
    
<!-- header section starts  -->


<header class="header" style="margin-top: 65px;">

    <nav class="navbar">
        <a href="../index.php"> <?php echo $lang['home'] ?></a>
        <a href="../index.php#services"> <?php echo $lang['services'] ?></a>
        <a href="../index.php#about"> <?php echo $lang['about'] ?></a>
        <a href="../index.php#doctors"> <?php echo $lang['gallery'] ?></a>
        <a href="../index.php#contact"> <?php echo $lang['contactus'] ?></a>
        <a href="../index.php#news"> <?php echo $lang['news'] ?></a>
       <!--  <a href="#sponsers">sponsers</a> -->
            
              </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
    

</header>

<!-- header section ends -->

<!-- home section starts  -->




                        <?php include '../connection.php';


                        $select="SELECT *FROM news";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $news_id=$row_user['news_id'];
                        $date=$row_user['date'];
                        $news_header=$row_user['news_header'];
                        $news_discription=$row_user['news_discripion'];
            
                        $image=$row_user['image'];

                        ?>



<div class="main_cards">

<div class="cards">
    <div class="image">
  <img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $image;?>" alt="news photo">
        
    </div>
<div class="date">
    <p style="font-size: bold;">Date</p><br>
    <p><?php echo $date ?></p>
</div>
    <div class="title">
        <h1><?php echo $news_header ?></h1>
        
    </div>

    <div class="des" class="post">
 <p class="content"><?php echo $news_discription ?></p>
         <button onclick="readMore(this)">Read More</button>

        
    </div>

</div>

    <?php } ?>


    
</div>























<!-- Contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="static file/developer.html"> <i class="fas fa-chevron-right"></i> Developers </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> news </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> sponsers </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardiuloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i>  +251 115 57-67-42 </a>
            <a href="#"> <i class="fas fa-phone"></i>  +251 115 57-66-98 </a>
            <a href="#"> <i class="fas fa-envelope"></i> dbu@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> dbrebrehanhospital@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Debre Brehan, Ethiopa - 2022 </a>
        </div>

        <div class="box">
            <h3>fullow us</h3>
            <a href="#"> <i class="fab fa-facecontact-f"></i> facecontact </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Telegram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> Youtube </a>
        </div>

    </div>

    <div class="credit"> <?php echo $lang['credit'] ?> <span> &#169; <?php echo $lang['credit_1'] ?></span> | <?php echo $lang['credit_2'] ?>  </div>

</section>

<!-- footer section ends -->


















<!-- custom js file link  -->
<script src="js/script.js"></script>
 <script src="assets/script.js"></script>


</body>
</html>