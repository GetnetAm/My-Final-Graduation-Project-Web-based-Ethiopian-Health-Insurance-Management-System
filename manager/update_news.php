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

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
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
    <title>Update casher</title>
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
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                      
                    
                
				
				
<?php
$news_id=$date=$news_header=$news_discripion ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$news_id   = $_POST["news_id"];
		$date       = $_POST["date"];

		$news_header       = $_POST["news_header"];
		//$images     = $_POST["image"];
		$news_discripion    = $_POST["news_discripion"];

	    
		
		
		if(isset($_POST['submit'])){

		$image=$_FILES['image']['name'];
		$tmp_name=$_FILES['image']['tmp_name'];

		

		
		
		
		
			$sql = "UPDATE news set news_id='$news_id', date='$date', news_header='$news_header', image='$image', news_discripion='$news_discripion' where news_id='$news_id'";
		
		if ($conn->query($sql) === true) {

			echo "news record updated successfully";
			
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		}else {
			
			$sql = "UPDATE news set news_id='$news_id', date='$date',news_header='$news_header', image='$image',  news_discripion='$news_discripion' where news_id='$news_id'";
		
		if ($conn->query($sql) === true) {
			echo "news record updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}	
		
		}
		
		
?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->

		

    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
