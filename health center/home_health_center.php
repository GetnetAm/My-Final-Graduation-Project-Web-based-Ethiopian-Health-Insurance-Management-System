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
.searchBar {
	float: auto;
	cursor: pointer;
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}
@media(max-width: 750px){

    #page-wrapper{
        position: absolute;
        top: 800px;
        left: 0;
        text-align: center;
    }


    .navbar-side {
        z-index: 1;
        position: absolute;
        width: 100%;
    }
    


    }



</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <!-------main css------>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
        <!-------main css------>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'header_health_center.php'; 

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="color: dodgerblue;">Health Center Page
						
						</h1>


			
		<!-- /. SEARCH  -->
	  <div class= "searchBar">
		  <form action="searchfor_health_center.php" method="post">
          <input type="text" name="key"><br>
          <input class="searchBtn" type="submit" value="SEARCH">
		  </br>
          </form>
	  </div>

		<!-- /. SEARCH  -->
				
				<br>
				<br>
				
				<!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-user fa-5x"></i>
                                <h5>
								<?php
				                     $sql = "SELECT count(*) AS c FROM customer";
	                                 $result = $conn->query($sql);
		
	                                 while($row = $result->fetch_assoc()) {
				                     echo "Total Customer: ";
	                                 echo $row["c"];
	                                 }
				                     ?>
								</h5>
                            </a>
                        </div>
                    </div>


                    

                </div>
		

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->




</body>
</html>
