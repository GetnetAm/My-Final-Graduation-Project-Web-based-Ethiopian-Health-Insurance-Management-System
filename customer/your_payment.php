<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
    
}


input[type=submit]:hover {
    background-color: #45a049;
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

      

.payment_1 .container{
	position: relative;
	width: 50%;
	max-width: 400px;

}
.payment_1 .container img{
	width: 300px;
	height: 300px;
	padding: 5px;
	text-align:left;
	position: left;
}

/*.container .button_payment_payment{
    position: absolute;
    top: 50%;
    left: 30%;
    transform: translate(-50%,-50%);
    background-color: #f1f1f1;
    color: black;
    font-size: 16px;
    padding: 16px, 30px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .button_payment_payment:hover{
    background-color: black;
    color: white;
}
*/


        *{
            margin: 0px;
            padding: 0px;

        }
        .main_cards{
            float: ;
        }
        .cards{
            width: 20%;
            border-radius: 5px;
            display: inline-block;
            margin: 40px;
            box-shadow: 2px 2px 10px black;
        }
        
        .image img{
            width: 100%;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            height: 100px;

        }

        .title{
            text-align: center;
        }

        .des{
            text-align: center;
            height: 60px;
        }

    .button_payment {
   
    border-color: white;
    border: 1px solid black;
    padding: 5px;
    border-radius: 5px;
    cursor: pointer;
    float: center;

}
.button_payment:hover{
    background-color: black;
    color: white;
    transition: .5s;
}
.pyment_form button{

font-size: 15px;
color: dodgerblue;
border-radius: 5px solid green;
}
.pyment_form button: hover{
background: white;
font-size: 15px;
color: dodgerblue;
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
    .cards{
        display: block;
        width: 100%;
    }
     .des{
        width: 100%;
     }

    
}







</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Profile Status</title>
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
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
<div class="pyment_form">
    
    

<button><a href="paymnet1test.php"> <h4>የክፍያ ማረጋግጫወን ይመልከቱ </h4></a></button>

</div>



<div class="main_cards">

<div class="cards">
    <div class="image">
        <img src="../images/cbe.jpg">
        
    </div>

    <div class="title">
        <h1>በሲቢኢ ይክፈሉ</h1>
        
    </div>

    <div class="des">
        <p>የሲቢኢ አካዉንት ካለውት በቀላሉ አመታዊ ክፍያወን መክፈል ይችላሉ</p>
        <a href="e_payment.php"><button class="button_payment_payment">ይክፈሉ</button></a>

        
    </div>

</div>


<div class="cards">
    <div class="image">
        <img src="../images/telebirr.png">
        
    </div>

    <div class="title">
        <h1>ቴሌ ብር ይክፈሉ</h1>
        
    </div>

    <div class="des">
        <p>የቴሌ ብር አካዉንት ካለውት በቀላሉ አመታዊ ክፍያወን መክፈል ይችላሉ</p>
        <a href="e_payment.php"><button class="button_payment_payment">ይክፈሉ</button></a>
        
    </div>

</div>
<div class="cards">
    <div class="image">
        <img src="../images/amole.jpg">
        
    </div>

    <div class="title">
        <h1>በአሞሌ ይክፈሉ</h1>
        
    </div>

    <div class="des">
        <p>የአሞሌ አካዉንት ካለውት በቀላሉ አመታዊ ክፍያወን መክፈል ይችላሉ</p>
        <a href="e_payment.php"><button class="button_payment_payment">ይክፈሉ</button></a>
        
    </div>

</div>

    
</div>







                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
