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
    <title>Add manager</title>
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
<?php include 'adminheader.php'; 
$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add manager</h1>
						
                    
                
 <div class="input_form">

<form action="insertmanager.php" method="post" enctype="multipart/form-data">
manager ID: <br>     
<input type="text" name="manager_id" value="<?php echo"$uniqueId"; ?>" required><br>
username:<br> <input type="text" name="username" required><br>
password:<br> <input type="password" name="password" minlength="5" required><br>

Full Name:   <br>         <input type="text" name="name" pattern="[a-zA-Z'-'\s]*"  required><br>
<!-- GENDER:          <input type="text" name="sex" required><br>
 -->
</div>
GENDER: <br>
<label for="male">Male</label><input type="radio" name="sex" value="Male">
<label for="fmale">Fmale</label>
<input type="radio"  name="sex" value="Fmale"><br>


<!-- Birth Date:      <input type="Date" name="birth_date" required><br> -->
<div class="input_form">

Marital Status:<br>  <input type="text" name="maritial_status" required><br>
Age:  <br>   <input type="number" name="age" required><br>
Phone:    <br>    <input type="tel" name="phone" minlength="10" maxlength="13" required autocomplete="off"><br>
E-mail:       <br> <input type="text" name="email" required autocomplete="off"><br>
Address:<br>         <input type="text" name="address" autocomplete="off" required><br>
School_level <br>   <input type="text" name="school_level" autocomplete="off" required><br>
<!-- Policy ID:       <input type="text" name="policy_id" required><br>
Agent ID:        <input type="text" name="agent_id" value="user name dispaly" required><br>
 -->
Image <br> <input type="file" name="user_image" accept="image/png, image/gif, image/jpeg" /><br>
<!-- Image            <input class="img" type="file" name="user_image" required> </br> -->


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
