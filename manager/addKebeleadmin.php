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
    <title>Add kebeleadmin</title>
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
                        <h1 class="page-head-line">Add kebeleadmin</h1>
						
                    
         <div class="input_form">        

<form action="insertkebeleadmin.php" method="post" enctype="multipart/form-data">
    <span style="color: red; font-size: 15px; font-style: italic;">* This is required</span><br>
Kebeleadmin ID:<span style="color: red; font-size: 20px;">*</span><br>
<input type="text" name="kebeleadmin_id" value="<?php echo"$uniqueId"; ?>" required><br>
password:<span style="color: red; font-size: 20px;">*</span><br>
 <input type="password" name="password" minlength="5" required><br>
username:<span style="color: red; font-size: 20px;">*</span><br>
 <input type="text" name="username" required><br>
Name:   <span style="color: red; font-size: 20px;">*</span><br>
         <input type="text" name="name" pattern="[a-zA-Z'-'\s]*"  required><br>
     </div>

GENDER: <br><span style="color: red; font-size: 20px;">*</span><br>

<label for="male">Male</label><input type="radio" name="sex" value="Male">
<label for="fmale">Fmale</label>
<input type="radio"  name="sex" value="Fmale"><br>
<div class="input_form">

<!-- Birth Date: <span style="color: red; font-size: 20px;">*</span>
     <input type="date" name="birth_date" required><br>
 -->Marital Status: <span style="color: red; font-size: 20px;">*</span><br>
 <input type="text" name="maritial_status" required><br>
Age:    <span style="color: red; font-size: 20px;">*</span><br>
 <input type="number" name="age" required><br>
Phone:  <span style="color: red; font-size: 20px;">*</span><br>
         <input type="tel" name="phone" minlength="10" maxlength="13" required><br>
E-mail:   <span style="color: red; font-size: 20px;">*</span><br>
          <input type="email" name="email" required><br>
Address:   <span style="color: red; font-size: 20px;">*</span><br>
         <input type="text" name="address" required><br>
School_level  <span style="color: red; font-size: 20px;">*</span><br>
  <input type="text" name="school_level" required><br>
<!-- Policy ID:       <input type="text" name="policy_id" required><br>
Agent ID:        <input type="text" name="agent_id" value="user name dispaly" required><br> -->
Image <input type="file" name="user_image" accept="image/png, image/gif, image/jpeg" /><br>
<!-- Image            <input class="img" type="file" name="user_image" required> </br>
 -->

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
