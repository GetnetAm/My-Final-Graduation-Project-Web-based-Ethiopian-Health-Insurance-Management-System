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

    <div class="policy">

    <h1> አመታዊ የደንበኛ ክፍያ ደንቦች</h1>

<table>
    <thead>
        <tr>
          
            <th>የክፍያ ዘመን</th>
            <th>ከ አንድ እስክ አራት ቤተሰብ</th>
            <th>ከ አምስት እስከ ስምንት ቤተሰብ</th>
            <th>ከዘጠኝ እስከ አስራ ሁለት ቤተሰብ</th>

        </tr>
    </thead>


<tbody>

               <?php include '../connection.php';


               $select="SELECT *FROM policy";

               $run=mysqli_query($conn,$select);

               while (
               $row_user=mysqli_fetch_array($run)){
               $policy_id=$row_user['policy_id'];
               $anaualy=$row_user['anaualy'];
               $one_four=$row_user['one_four'];
               $five_egiht=$row_user['five_egiht'];
            

               $nine_twelve=$row_user['nine_twelve'];
               $free=$row_user['free'];

               ?>


                <td><?php echo $anaualy ?></td>
                <td><?php echo $one_four ?></td>
                <td><?php echo $five_egiht ?></td>
                <td><?php echo $nine_twelve ?></td>
                                                
                          
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>
   


</div>



    <!-- Banks/agent part -->


   <div class="col-md-14" style="margin-top: 50px;">
                        <h1 style="color:gold; background-color:black; text-align: center;"  class="page-head-line">የባንክ መረጃ ለማግኘት
                         </h1>
                     </div>



<table>
    <thead>
        <tr>
            <th>የባንኩ ስም</th>
            <th>የሂሳብ ቁጥር</th>
            
        </tr>
    </thead>


<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM agent";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $agent_id=$row_user['agent_id'];
                        $bank_name=$row_user['name'];
                        $account=$row_user['accunt'];
                       
            


                        ?>


                 
                    <td><?php echo $bank_name ?></td>
                    <td><?php echo $account ?></td>
                                             
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>
   
   

</div>

				
 </div>

 </div>
    <!-- /. WRAPPER  -->



	
</body>
</html>
