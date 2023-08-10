<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
    <title>Add Policy</title>
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
<script>
function validateForm() {
  let x = document.forms["myForm"]["notification_id"].value;
  if (x == "") {
    alert("Notification id must be filled out");
    return false;
  }
  let y = document.forms["myForm"]["date"].value;
  if (y == "") {
    alert("Date must be filled out");
    return false;
  }
    let z = document.forms["myForm"]["notification"].value;
  if (z == "") {
    alert("Notification must be filled out");
    return false;
  }
}
</script>





        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Notifaction</h1>
                       
						
                    
                

<form name="myForm" action="insert_notification.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">


Notification_id: <input type="text" name="notification_id"><br>
Date:           <input type="date" name="date" ><br>

Message:   <textarea cols="80" rows="5" name="notification"></textarea><br>

<!-- Message:         <input type="text" name="notification" required><br> -->

<input type="submit">

</form>
				
				


                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
