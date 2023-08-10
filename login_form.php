<?php
    include "static file/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title><?php echo $lang['title'] ?> </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" type="text/css" href="my project/my static website dual languch/css/bootstrap-4.0.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">

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
    *{
    margin: 0px;
    padding: 0px;

}

:root{
  --green:#27ae60;
  --black:#444;
  --light-color:#777;
  --bg-color:#e6e6e6;
  --border: 1rem solid rgba(0,0,0,.2);
  --box-shadow:.4rem .4rem 1rem #ccc,
          -.4rem -.4rem 1rem #fff;
    --box-shadow-inset:.4rem .4rem 1rem #ccc inset,
            -.4rem -.4rem 1rem #fff inset;
}
.header_login{
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background:#5f9ea0;
    text-align: center;
    border: 1px solid #b0c4de;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}
.header_login h2{
    font-size: 45px;
}
.form_login{
    width: 30%;
    margin: 0px auto;
    padding:20px;
    border:1px solid #b0c4de;
    background:white;
    border-radius: 0px 0px 10px 10px;
}
.option_select {
    text-align: right;
    border-radius: 5px solid green;
}
.form_login label{
    font-size: 15px;
}

.input-group{
    margin: 10px 0px 10px 0px;
}
.input-group label{
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input{
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size:16px;
    border-radius: 5px;
    border:1px solid gray; 
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

.btn:hover{
  box-shadow: var(--box-shadow-inset);
  color: black
}


p{
    text-align: right;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   font-size: 15px;
   width: 95%;
   border-radius: 5px solid red;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
   font-size: 15px;
}

@media(max-width: 750px){


    .main_header{
        width: 100%;
    }
    .header_login{

        width: 100%;
        position: sticky;
           }
           .main_form, form .input-group input{
            width: 100%;
           }
           .header_list{
            width: 100%;
            position: sticky;
           }
           form .form_login{
            width: 100%;
            text-align: center;
           }




    }

    </style>



</head>
<body>


<header class="main_header">
<div class="header_option">
    <a href="login_form.php?lang=en"><?php echo $lang['lang_en'] ?></a>
     | <a href="login_form.php?lang=am"><?php echo $lang['lang_am'] ?></a>

</div>



    <ul class="header_list">
         
            <li style="font-weight: buld; font-size: 30px;"><a href="#"><img style="width: 800px; height:40px" src="images/insurance.jpg"></a></li>
         </ul>
    </header>



        <br>
    
<!-- header section starts  -->


<header class="header" style="margin-top: 65px;">

    <nav class="navbar">
        <a href="index.php"> <?php echo $lang['home'] ?></a>
        <a href="index.php"> <?php echo $lang['services'] ?></a>
        <a href="index.php"> <?php echo $lang['about'] ?></a>
        <a href="index.php"> <?php echo $lang['gallery'] ?></a>
        <a href="index.php"> <?php echo $lang['contactus'] ?></a>
        <a href="static file/news_one.php"> <?php echo $lang['news'] ?></a>
       <!--  <a href="#sponsers">sponsers</a> -->
            
              </nav>

    <div id="menu-btn" class="fas fa-bars"></div>


    

</header>

<div class="header_login" style="margin-top:100px;">
    <h2 style="background-color:black"><strong><span style="color: green ;font-size: 45px;">L</span><span style="color: yellow;">og</span><span style="color: red;">in</span></strong></h2>
</div>

<!-- header section ends -->

<!-- home section starts  -->
<div class="main_form">
<form method="POST" action="login.php" class="form_login">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>







    <div class="option_select">
    <div class="input-group">

        
        <label style="text-align: right;">Select your role</label>
    <select name="select1" class="form-control" id="select2">
        <option>None</option>
        <option>Admin</option>
        <option>Manager</option>
        <option>Health Center</option>
        <option>Red Cross</option>
        <option>Kebele Admin</option>
        <option>Customer</option>

                
    </select>
    </div>
</div>


<div class="input-group">
        <label>username</label>
        <input type="text"name="username" value="" required>

    </div>
    <div class="input-group">
        <label>password</label>
        <input type="password" name="password" value="" required>
        
    </div>
    

    <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
        
    </div>



  
</form>

</div>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>







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


















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>