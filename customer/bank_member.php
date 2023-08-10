<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
	
}


input[type=submit]:hover {
    background-color: #45a049;
}

	h1{
			font-style: italic;
			text-align: center;
			color: #094a89;
		}
		table{
			border-collapse: collapse;
			width: 100%;
			font-style: italic;
			text-align: center;
		}
		th{
			background-color: dodgerblue;
			color: white;
		}
		th,td{
			border: 2px solid #ddd;
			padding: 15px;
		}


@media(max-width: 300px){
.table thead{
	display: none;
}

.table, .table tbody, .table tr, .table td{
	display: block;
	width: 100%;
}
.table tr{
	margin-bottom: 15px;

}
.table td{
	text-align: right;
	padding-left: 50%;
	text-align: right;
	position: relative;
}
.table td::before{
	content: attr(data-label);
	position: absolute;
	left: 0;
	width: 50%;
	padding-left: 15px;
	font-size: 15px;
	font-weight: bold;
	text-align: left;
}

}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kebele admin Status</title>
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
<?php include 'customerheader.php'; 
//$username = $_SESSION["username"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Bank Status</h1>






                     <div class="res-tab">

	<h1>Campany Agent Bank</h1>
	<table class="table">
		<tbody>
			<tr>
				<th>Bank Name</th>
				<th>Account Number</th>
				
				
			</tr>
			
			<tr>
				<td>Abay Bank</td>
				<td>90204875527851</td>
				
			</tr>
				<tr>
				<td>CBE Bank</td>
				<td>10004875527851</td>
				
			</tr>
				<tr>
				<td>Abisinya Bank</td>
				<td>04875527851</td>
				
			</tr>
		</tbody>
	</table>

                    
                
                <!-- /. ROW  -->


                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
