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
    <title>Add Familiy</title>
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
include 'kebeleheader.php'; 

$uniqueId2 = time().'-'.mt_rand();

if(isset($_GET["customer_id"])){
$customer_id= $_GET["customer_id"];
}else{ $customer_id="";
}
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Family</h1>
						
                    
           <div class="input_form">
      

<form action="insertfamily.php" method="post">

Family ID:    <input type="text" name="family_id" value="<?php echo"$uniqueId2"; ?>"required><br>
Custmer ID:     <input type="text" name="customer_id"  value="<?php echo"$customer_id"; ?>" required><br>
Full Name:          <input type="text" name="name" required><br>
</div>
GENDER: <br>
<label for="male">Male</label><input type="radio" name="sex" value="Male">
<label for="fmale">Fmale</label>
<input type="radio"  name="sex" value="Fmale"><br>
<div class="input_form">

<!-- Birth Date:    <input type="date" name="birth_date" required><br>
 -->Age:           <input type="number" name="age" required><br>
Relationship:  <input type="text" name="relationship" required><br>
Phone:         <input type="tel" name="phone" ><br>

<input type="submit" name="">
</form>
				
		</div>		

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
