<?php
    include "static file/config.php";
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
        <link rel="stylesheet" href="assets/fontawesome-free-5.15.3-web/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/static_style.css">

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

    </style>



</head>
<body>


<header class="main_header">
<div class="header_option">
    <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
     | <a href="index.php?lang=am"><?php echo $lang['lang_am'] ?></a>

</div>



    <ul class="header_list">
        
            <li class="header_option" id="header_option"><a href="login_form.php"><img style="width:80px; height: 30px;" src="images/login_part.png"></a></li>
         
            <li style="font-weight: buld; font-size: 30px;"><a href="#"><img style="width: 800px; height:40px" src="images/insurance.jpg"></a></li>
         </ul>
    </header>
        <br>
    
<!-- header section starts  -->


<header class="header" style="margin-top: 65px;">

    <nav class="navbar">
        <a href="#home"> <?php echo $lang['home'] ?></a>
        <a href="#services"> <?php echo $lang['services'] ?></a>
        <a href="#about"> <?php echo $lang['about'] ?></a>
        <a href="#doctors"> <?php echo $lang['gallery'] ?></a>
        <a href="static file/developer.php"> <?php echo $lang['contactus'] ?></a>
        <a href="static file/news_one.php"> <?php echo $lang['news'] ?></a>
       <!--  <a href="#sponsers">sponsers</a> -->
            
              </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
    

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
            <div id="slider">
                            <figure>
                                <img src="images/homeimage (1).jpg">
                                <img src="images/farmer.png">

                                <img src="images/pople.jpg">
                                <img src="mather.jpg">

                            </figure>
                            
               </div>


    <div class="content">
        <h3> <?php echo $lang['content'] ?></h3>
        
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
         <i class="fas fa-users"></i>
        <h3 style="width:100%; font-size: 25px;"><?php echo $lang['beneficery'] ?></h3>
        <p><?php echo $lang['benaficary1'] ?></p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3><?php echo $lang['woreda'] ?></h3>
        <p><?php echo $lang['woreda1'] ?></p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3><?php echo $lang['healfince'] ?></h3>
        <p><?php echo $lang['healfince1'] ?></p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3><?php echo $lang['branch'] ?></h3>
        <p><?php echo $lang['branch1'] ?></p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"><span> <?php echo $lang['news_ser'] ?></span> </h1>

    <div class="box-container">

        

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3><?php echo $lang['ambulance_ser'] ?></h3>
            <p><?php echo $lang['ambulance-ser2'] ?></p>
           <button class="btn" onclick="readMore(this)">Read More</button>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3><?php echo $lang['doctores_ser'] ?></h3>
            <p><?php echo $lang['doctores_ser2'] ?></p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3><?php echo $lang['pharmacy'] ?></h3>
            <p><?php echo $lang['pharmacy1'] ?></p>
            <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>
        </div>
        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3><?php echo $lang['emergence_ser'] ?></h3>
            <p><?php echo $lang['emergence_ser1'] ?></p>
            <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3><?php echo $lang['bed_service_1'] ?></h3>
            <p><?php echo $lang['bed_service_2'] ?></p>
           <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3><?php echo $lang['total_care'] ?></h3>
            <p><?php echo $lang['total_care1'] ?></p>
            <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>
        </div>
        <div class="box">
            <i class="fas fa-hospital"></i>
            <h3><?php echo $lang['mather_ser'] ?>
        </h3>
            <p><?php echo $lang['mather_ser_1'] ?></p>
            <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>
        </div>



    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span><?php echo $lang['about_heading'] ?></span><?php echo $lang['about_heading'] ?></h1>

    <div class="row">

        <div class="images">
            <img src="images/main_tena.jpg" alt="">
        </div>

        <div class="content" style="font-family: serif; font-style:italic;">
            <h3><?php echo $lang['about_h3'] ?></h3>
            <p><?php echo $lang['about_p'] ?></p>

</p>
  
            <span class="read-more-btn">Read More...</span>
            <button class="read-more-btn">Red More</button>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- gallary section -->

<section class="doctors" id="doctors">

  <h1 class="heading"> <?php echo $lang['galleryp'] ?><span> <?php echo $lang['gallerypp'] ?></span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/docter.jpg" alt="" style="width:100%;">
            <h3><?php echo $lang['doctores'] ?></h3>
            <span><?php echo $lang['doctores1'] ?></span>
                  </div>

        <div class="box">
            <img src="images/doc4.jpg" alt="">
            <h3><?php echo $lang['nurse'] ?></h3>
            <span><?php echo $lang['nurse1'] ?></span>
                   </div>

        <div class="box">
            <img src="images/people.jpg" alt="" style="width:100%;">
            <h3><?php echo $lang['customer'] ?></h3>
            <span><?php echo $lang['customer1'] ?></span>
                  </div>

        <div class="box">
            <img src="images/insu.jpg" alt="" style="width: 100%;">
            <h3><?php echo $lang['employe'] ?></h3>
            <span><?php echo $lang['employe1'] ?></span>
                   </div>

        <div class="box">
            <img src="images/peple11.jpg" alt="">
            <h3><?php echo $lang['customer'] ?></h3>
            <span><?php echo $lang['customer1'] ?></span>
          
        </div>

        <div class="box">
            <img src="images/tena.jpg" alt="" style="width:100%;">
            <h3><?php echo $lang['tena'] ?></h3>
            <span><?php echo $lang['tena1'] ?></span>
                  </div>

    </div>

</section>

<!-- doctors section ends -->


<!-- news section starts  -->

<section class="news" id="news">
    
    <h1 class="heading"> <?php echo $lang['news_heading'] ?><span class="news_heading_1"> <?php echo $lang['news_heading_1'] ?></span> </h1>

    <div class="box-container">

        <div class="sacle">
            <img src="images/scale.png" alt="" width="70%">
            <h3><?php echo $lang['static_hi'] ?></h3>
            <p class="text"><?php echo $lang['current_statics'] ?>

            </p>
        </div>


    </div>

</section>

<!-- news section ends -->

<!-- sponsers section starts  -->

<section class="sponsers" id="sponsers">

    <h1 class="heading"> <?php echo $lang['sponsers_news'] ?><span> <?php echo $lang['sponsers_news_1'] ?></span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="images">
                <img src="images/hfg.png" alt="">
            </div>
            <div class="content">
                
                <h3><?php echo $lang['hfg'] ?></h3>
                <p><?php echo $lang['hfgnote'] ?>.</p>
             <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>

            </div>
        </div>

        <div class="box">
            <div class="images">
                <img src="images/usa.png" alt="" width="100%">
            </div>
            <div class="content">
                <div class="icon">
                   
                </div>
                <h3><?php echo $lang['usaid'] ?></h3>
                <p> <?php echo $lang['usaidnote'] ?></p>
                <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>

            </div>
        </div>

        <div class="box">
            <div class="images">
                <img src="images/america.png" alt="">
            </div>
            <div class="content">
                 <h3><?php echo $lang['epr'] ?></h3>
                <p><?php echo $lang['eprnote'] ?></p>
              <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>
            </div>
        </div>

    </div>

</section>

<!-- sponsers section ends -->




<!-- Contact section starts   -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> <?php echo $lang['gps'] ?></span> <?php echo $lang['gps1'] ?></h1>    

    <div class="row">

        <div class="image_news">
          
            <a href="https://www.google.com/search?client=firefox-b-d&sxsrf=ALiCzsapsAPznX1-5EUPgFZ56pGU8QxxAg:1657054285195&q=debre+berhan+hospital&sa=X&ved=2ahUKEwisn6ug0OL4AhWTuKQKHfwkAqkQuzF6BAgBEAI&biw=1366&bih=643&dpr=1#"><img src="images/dbugps.jpg" alt="" style="width:95%; height:400px;"></a>
                   </div>
                   
               </div><br>
                <h3 style="text-align: center; color:dodgerblue; font-size: 56;"> <?php echo $lang['location1'] ?>   <i class="fas fa-map-marker-alt"></i></h3>
        <button class="btn" onclick="readMore(this)">Read More<span class="fas fa-chevron-right"></button>

            </div>

    

    </div>

</section>

<!-- Contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3><?php echo $lang['links'] ?></h3>
            <a href="#"> <i class="fas fa-chevronMalari-right"></i></i><?php echo $lang['home1'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i></i><?php echo $lang['services2'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i></i><?php echo $lang['abut2'] ?></a>
            <a href="static file/developer.php"> <i class="fas fa-chevron-right"></i></i><?php echo $lang['developers1'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i></i><?php echo $lang['news2'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i></i><?php echo $lang['gallery2'] ?></a>
        </div>

        <div class="box">
            <h3><?php echo $lang['services_all'] ?></h3>
            <a href="#"> <i class="fas fa-chevron-right"></i><?php echo $lang['labratory'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i><?php echo $lang['malaria'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i><?php echo $lang['bed_service'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i><?php echo $lang['emergence1'] ?></a>
            <a href="#"> <i class="fas fa-chevron-right"></i><?php echo $lang['ambulance_cervice'] ?> </a>
            <a href="#"> <i class="fas fa-chevron-right"></i><?php echo $lang['mather'] ?> </a>
        </div>

        <div class="box">
            <h3><?php echo $lang['contact_info'] ?></h3>
            <a href="#"> <i class="fas fa-phone"></i> <?php echo $lang['phone'] ?> </a>
            <a href="#"> <i class="fas fa-phone"></i><?php echo $lang['phone2'] ?> </a>
            <a href="#"> <i class="fas fa-envelope"></i> <?php echo $lang['email_1'] ?></a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i><?php echo $lang['place1'] ?></a>
        </div>

        <div class="box">
            <h3><?php echo $lang['follow_us'] ?></h3>
          
            <a href="#"> <i class="fab fa-twitter"></i> <?php echo $lang['tiwt'] ?> </a>
            <a href="#"> <i class="fab fa-instagram"></i> <?php echo $lang['insta'] ?></a>
            <a href="#"> <i class="fab fa-telegram"></i> <?php echo $lang['tel'] ?> </a>
            <a href="#"> <i class="fab fa-pinterest"></i><?php echo $lang['youtube'] ?>  </a>
        </div>

    </div>

    <div class="credit"> <?php echo $lang['credit'] ?> <span> &#169; <?php echo $lang['credit_1'] ?></span> | <?php echo $lang['credit_2'] ?>  </div>

</section>

<!-- footer section ends -->














    <script>
const parentContainer =  document.querySelector('.read-more-container');

parentContainer.addEventListener('click', event=>{

    const current = event.target;

    const isReadMoreBtn = current.className.includes('read-more-btn');

    if(!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.read-more-text');

    currentText.classList.toggle('read-more-text--show');

    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

})   </script>



<!-- custom js file link  -->
 <script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js_static/script.js"></script>
 <script src="assets/button.js"></script>


</body>
</html>