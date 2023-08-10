<!DOCTYPE html>

<html>
<head>
<style>
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

*{
	font-family: 'poppins',sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-decoration: none;
	text-transform: capitalize;
	transition: .2s linear;
}


.about .row{
	display: flex;
	align-items: center;
	flex-wrap: wrap-reverse;
	gap:2rem;
}
.about .row .box-container{
	flex: 1 1 40rem;
	display: flex;
	gap:1.5rem;
	flex-wrap: wrap;
}
.about .row .box-container .box{
	flex: 1 1 18rem;
	text-align: center;
	padding: 2rem;
	border-radius: .5rem;
	box-shadow: var(--box-shadow);

}
.about .row .box-container .box h3{
	font-size: 4rem;
	color: var(--black);
}
.about .row .box-container .box p{
	font-size: 1.7rem;
	color: var(--light-color);
	padding: .5rem 0;

}
.about .row .content{
	flex: 1 1 40rem;


}
.about .row .content h3{
	font-size: 3.5rem;
	color: var(--black);
	line-height: 1.8;

}
.about .row .content h3 span{
	color: var(--green);
}
.about .row .content p{
	font-size: 1.5rem;
	color: var(--light-color);
	line-height: 1.8;
	padding: 1rem 0;
}

.about .row .nth-child(3){
	padding-top: 2rem;



}

		h1{
			font-style: italic;
			text-align: center;
			color: #094a89;
		}
		table{
			border-collapse: collapse;
			width: 100%;
			font-style: italic;
			text-align: center;
		}
		th{
			background-color: dodgerblue;
			color: white;
		}
		th,td{
			border: 2px solid #ddd;
			padding: 15px;
		}

/*
@media(max-width: 300px){
.table thead{
	display: none;
}

.table, .table tbody, .table tr, .table td{
	display: block;
	width: 100%;
}
.table tr{
	margin-bottom: 15px;

}
.table td{
	text-align: right;
	padding-left: 50%;
	text-align: right;
	position: relative;
}
.table td::before{
	content: attr(data-label);
	position: absolute;
	left: 0;
	width: 50%;
	padding-left: 15px;
	font-size: 15px;
	font-weight: bold;
	text-align: left;
}
.message{
	background-color: black;
	width: 600px;
	border-radius: 5px solid dodigerblue;
	
}
#list{
	background-color: gray;
	width: 50%;

}
#list li{
	list-style: none;
	font-family: sans-serif;
}*/

@media(max-width: 750px){

    #page-wrapper{
        position: absolute;
        top: 900px;
        left:5px;
        text-align: center;
        width: 100%;

    }
     .navbar-side {
        z-index: 1;
        position: absolute;
        width: 260px;
    }

    .navbar {
        border-radius: 0px;
    }

    #list .notify, .message{
    	width: 100%;
    	text-align: center;

    }

  
    
}

</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Policy and message</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
   
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'customerheader.php'; 
?>
        <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
            
                <!----about section  starts --------->

 
   
   

            
      <div class="notify">

    <h1 style="color:dodgerblue"> አዳድስ ማሳሰቢያወች</h1>
            

           <?php include '../connection.php';


           $select="SELECT *FROM notification";

          $run=mysqli_query($conn,$select);

           while (
          $row_user=mysqli_fetch_array($run)){
         $notification_id=$row_user['notification_id'];
         $date=$row_user['date'];
         $notifcation=$row_user['notification'];
                       


      
                        ?>
  
 <ul id="list">
<div class="message" style="background: gray; width: 50%; border-radius: 5px solid gold; color: white;"> 
	
	
      <h4>ቀን፡</h4>
      <?php echo $date ?>
    <h4>ማሳሰቢያ፡</h4>
        <?php echo $notifcation ?>

      </div>
      </ul>

 

   <?php } ?>

                      


</div>

				
 </div>

 </div>
    <!-- /. WRAPPER  -->



	
</body>
</html>
