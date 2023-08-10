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
.home .content h3{
    font-size: 7rem;
    color: var(--black);
    line-height: 1.1;
    text-transform: uppercase;
}


.home .content p{
    font-size: 2rem;
    color: var(--green);
    padding-bottom: 2rem;
    }
.home .share{
    position: relative;
    top: 10rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    padding: 1rem;
}

.home .share a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    box-shadow: var(--box-shadow);
    margin: .5rem;
    font-size: 2rem;
    color: var(--black);
    border-radius: 5rem;
}
/*file css*/
*{
            margin: 0px;
            padding: 0px;
        }

        body{
            font-family: arial;
        }
        .card{
            width: 30%;
            margin: 40px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px black;
        }

        .image img{
            width: 100%;
            height: 200px;
            border-top-right-radius:5px;
            border-top-left-radius: 5px;
        }
        
        .title{
            text-align: center;
            padding: 5px;
        }




.home .share a:hover{
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
    }


</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer home page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <!-------main css------>
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
        <!-------main css------>
    
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.12.1-web/css/all.css">

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'customerheader.php'; 

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <section class="home" id="home">
                     <?php
                                    if(!isset($_SESSION["customerLogIn"])){
                                        header("Location: login_form.php");
                                    }else {

                                        //echo "welcome, ".$_SESSION["customerLogIn"];
                                    }
                                ?>

    <div class="content">
        <h1><?php echo "እንኳን ደህና መጡ ".$_SESSION["customerLogIn"];?></h1>


<!--                         <h1 class="page-head-line">Customer's Status</h1>
 -->

                        <div class="card">
    <div class="image">
       <img class="profile-user-img img-responsive"; width="200px" height="200px"; src="../upload/<?php echo $images;?>" alt="customer has no profile picture">
        
    </div>

    
</div>


 <h1 class="page-head-line">የኢትዮጵያ ጤና መድን ኤጅንሲ የደብረብረሃን ቅርንጫፍ </h1>

<table>
    <thead>
        <tr>
            
            <th>ስልክ ቁጥር</th>
                  
        

        </tr>
    </thead>
<tbody>

                <?php include '../connection.php';


                $select="SELECT *FROM customer WHERE username='$customerUserName'";

                $run=mysqli_query($conn,$select);

                while (
               $row_user=mysqli_fetch_array($run)){
                 $customer_id=$row_user['customer_id'];
                $full_name=$row_user['full_name'];
                $phone=$row_user['phone'];
                $no_family=$row_user['no_family'];
                $images=$row_user['image'];
                ?>

            <h2><?php echo $full_name ?></</h2>

            <td><?php echo $phone ?></td>     
            
                         </tr>

                <?php } ?>

            </tbody>
            </table>


    </div>
    <!-- /. WRAPPER  -->




</body>
</html>
