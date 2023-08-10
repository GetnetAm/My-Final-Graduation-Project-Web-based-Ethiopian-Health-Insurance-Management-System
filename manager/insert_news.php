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
    <title>Insert Notification</title>
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
                        <h1 class="page-head-line">Insert news
						<button class="btn" align="center"> 
                        <a href="add_news.php" class="btn">Add New news</a>
                        </button>
						</h1>
                    
                
				
				
<?php

include'../connection.php';

   

	    $news_id      = $_POST["news_id"];
	    $date=       $_POST["date"];
        $news_header=       $_POST["news_header"];

       // $images=       $_POST["image"];

		$news_discripion = $_POST["news_discripion"];
        $image=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
	
		


		
	$insert ="INSERT INTO news(news_id,date,news_header,image,news_discripion) VALUES('$news_id','$date','$news_header','$image','$news_discripion')";


	
	if ($conn->query($insert) === true) {
            move_uploaded_file($tmp_name, "../upload/$image");
			echo "New News is add";  echo '</br>';
		} else {
			echo "Error: " . $insert . "<br>" . $conn->error;  echo '</br>';
		}
		




		
?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
