
<!DOCTYPE html>

<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
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
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
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

.btn .btn-green{
background: green;

}
.btn .btn-danger{
	background: red;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>customer Coment Information</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                    
                    </div>
                </div>
                
           
<div class="res-tab">

	<h1>View Customer Comment Information</h1>
	                       <?php
                      include '../connection.php';

                       if (isset($_GET['del'])) {
                        	$name=$_GET['del'];
                        	$delete="DELETE FROM comment WHERE name='$name'";
                        	$run_delete=mysqli_query($conn,$delete);
                        	if ($run_delete===true) {
                        		echo "your are succsesfuly deleted";
                        	}
                        } 


                       ?>
	<table class="table">
		<thead>
			<tr>
	
				<th>Full Name</th>
				<th>Email</th>
				<th>Addiress</th>
				<th>Delete</th>
				
				
			</tr>

		</thead>
		<tbody>

		<?php



		$conn=mysqli_connect('localhost','root','','main_adivanced_dbone_2');
		$select="SELECT * FROM comment";
		$run=mysqli_query($conn,$select);
	    while ($row_user=mysqli_fetch_array($run)) {
		 	

        $name=$row_user['name'];
        $address=$row_user['address'];
        $text=$row_user['text'];

		?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $address; ?></td>
				<td><?php echo $text; ?></td>
	

			  <td><a class="btn btn-danger" href="view_comment.php?del=<?php echo $name;?>">Delete</a></td>
			
	
			</tr>

		<?php }?>
		</tbody>
	</table>
		
	</div>

                        
		  
		  
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->



	
</body>
</html>
