<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
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
    <title>Add red cross</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
   
<link rel="stylesheet" type="text/css" href="../assets/bestfonts/fontawesome-free-5.12.1-web/css/all.min.css">


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
                        <h1 class="page-head-line" style="color:red;">Add New Red Cross<i class="fa fa-cross" style="font-size:60px;"></i></h1>
						
                    
              <div class="input_form">
  

<form action="insert_red_cross.php" method="post" enctype="multipart/form-data">
Red Cross ID: <br>      <input type="text" name="red_cross_id" value="<?php echo"$uniqueId"; ?>" required><br>
Red Cross Branch Name:<br> <input type="text" name="red_cross_branch_name" pattern="[a-zA-Z'-'\s]*"  required ><br>
Username:<br> <input type="text" name="username" required><br>
Password:<br> <input type="password" name="password" minlength="5" required><br>
Phone:<br> <input type="tel" name="phone" minlength="10" maxlength="13" required><br>
Email:<br> <input type="text" name="email" required><br>
Address: <br>        <input type="text" name="address" required><br>

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
