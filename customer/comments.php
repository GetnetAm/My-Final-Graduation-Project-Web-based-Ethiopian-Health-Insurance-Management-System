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


section{
	min-height: 100vh;
	padding: 2rem;
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
.heading{
	text-align: center;
	font-size: 4rem;
	color: var(--black);
	text-transform: uppercase;
	padding-bottom: 2rem;
}
.heading span{
	color: var(--green);
	text-transform: uppercase;

}



.box{
	padding: 2rem;
	border-radius: .5rem;
	box-shadow: var(--box-shadow);
	position: relative;
	z-index: 0;
	overflow-x: hidden;
}

.box i{
	font-size: 4rem; 
	padding-bottom: 5rem
	color:#fff;

}
.box h3{
	font-size: 2rem;
	padding-bottom: 5rem;
	color: var(--black);
}

.box p{
	font-size: 1.4rem;
	line-height: 1.8;
	color: var(--light-color);
}

.box::before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background: var(--green);
	z-index: -1;
	clip-path: circle(9rem at 5% 0%);
	transition: .3s linear;

}

.box:hover::before{
	clip-path: circle(100%);


}




.box .content{
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background: var(--bg-color);
	display: grid;
	place-items:center;
	transform: scale(0);
}


.contact form{
	margin: 1rem auto;
	max-width: 70rem;
	border-radius: .5rem;
	box-shadow: var(--box-shadow);
	padding: 2rem;
}
.contact form .box{
	padding: 1rem 1.5rem;
	background: none;
	color: var(--black);
	font-size: 1.6rem;
	text-transform: none;
	margin: .7rem 0;
	box-shadow: var(--box-shadow);
	border-radius: .5rem;
}
.contact form textarea{
	height: 20rem;
	resize: none;
}

@media (max-width: 450px){

	section{
		font-size: 60%;
	}

	form{
		width: 100%;
		border-right: 0;
	}

}

@media(max-width: 750px){

    #page-wrapper{
        position: absolute;
        top: 900px;
        left: 0;
        width: 450px;
        text-align: center;

    }


.contact form{
	margin: 1rem auto;
	max-width: 350px;
	border-radius: .5rem;
	box-shadow: var(--box-shadow);
	padding: 2rem;
}
.contact form textarea{
	height: 20rem;
	width: 300px;
}
    }






</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Comment</title>

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
            
             <!-----contact section --->

<section class="contact" id="contact">
	<h1 class="heading"><span>Your Complain</span> ቅሬታውን ዎይንም አስትያየተውን ያስቀምጡ</h1>
	<form action="commentserver.php" method="post">
		<label>enter full name/</label><br>
		<input type="text" name="name" class="box" value=""><br>
		<label>addiress አድራሻ </label><br>
		<input type="text" name="address" class="box" value=" "><br>
		<label>your massage ሃሳበዎ እዚህ ላይ ያስፍሩ</label><br>
		<textarea name="text" class="box" placeholder="" id="" cols="60" rows="20"></textarea>
		<input type="submit" name="submit" class="btn" value="send message">


		
	</form>
	
</section>


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
