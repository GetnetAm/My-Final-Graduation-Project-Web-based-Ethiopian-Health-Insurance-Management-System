<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
   /* width: 40%;
    padding: 20px 20px;
    margin: 8px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;*/

    /*//width: 50%;*/
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border:1px solid #555;
}

.input_form input{
    width: 80%
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add casher</title>
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
<?php include 'header.php'; 
$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Health Center</h1>
						
                    
              <div class="input_form">

        <form action="insert_health_Center.php" method="post" enctype="multipart/form-data">
             <span style="color: red; font-size: 15px; font-style: italic;">* This is required</span><br>
        Health Center Id: <span style="color: red; font-size: 20px;">*</span><br>
        <input type="text" name="health_center_id"  required ><br>
        Health Center Name:<span style="color: red; font-size: 20px;">*</span> <br>
        <input type="text" name="health_center_name" pattern="[a-zA-Z'-'\s]*"   required><br>
        Health Center Type:<span style="color: red; font-size: 20px;">*</span><br>
        <input type="text" name="health_center_type" pattern="[a-zA-Z'-'\s]*"  required><br>

    Casher ID: <span style="color: red; font-size: 20px;">*</span><br>
    <input type="text" name="casher_id" value="<?php echo"$uniqueId"; ?>"  ><br>
    User Name:<span style="color: red; font-size: 15px;">*</span><p style="color: red">dono't forget</p><br> 
    <input type="text" name="username"   style="color: red"><br>
    Health Center Password:<span style="color: red; font-size: 15px;">don't forget*</span><br> 
    <input type="password" name="password" minlength="5" required ><br>
    Casheir Name:  <span style="color: red; font-size: 20px;">*</span>  <br>
    <input type="text" name="name" pattern="[a-zA-Z'-'\s]*" required ><br>

    Phone:  <span style="color: red; font-size: 20px;">*</span> <br>  
    <input type="tel" name="phone" minlength="10" maxlength="13" required ><br>
    Email:  <span style="color: red; font-size: 20px;">*</span><br> 
        <input type="text" name="email" required ><br>
    Address: <span style="color: red; font-size: 20px;">*</span><br>  
    <input type="text" name="address" required><br>

<!-- Policy ID:       <input type="text" name="policy_id"  ><br>
Agent ID:        <input type="text" name="agent_id" value="dispay user name in php"  ><br>
 -->
<!-- 
Image            <input class="img" type="file" name="user_image"> </br> -->



<input type="submit" name="submit">

</form>
				
				
</div>  
                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
