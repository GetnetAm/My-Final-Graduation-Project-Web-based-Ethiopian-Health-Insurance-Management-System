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
.searchBox{
    
    cursor: pointer;
	font-size: 85%;
	
}
   
table{
  font-family: sans-serif;
  border-collapse: collapse;
}

th{
  background-color: #333;
  color: #fff;
}

th, td{
  padding: .8rem;
  font-size: 1.4rem;
}

tbody{
  background-color: #eee;
  color: #555;
}


@media screen and (max-width: 600px){
   th{
    display: none;
  }

  thead{
    display: none;
  }

  td{
    display: block;
  }

  td:first-child{
    background-color: #333;
    color: #fff;
    text-align: center;
  }
  
  td:nth-child(1)::before{
    content: "customer ID";
  }

  td:nth-child(2)::before{
    content: "NAME";
  }

  td:nth-child(3)::before{
    content: "BIRTH DATE";
  }

  td:nth-child(4)::before{
    content: "AGE";
  }

  td:nth-child(5)::before{
    content: "Phone";
  }

  td:nth-child(6)::before{
    content: "EMAIL";
  }
  td:nth-child(7)::before{
    content: "Kebele";
  }

  td:nth-child(8)::before{
    content: "Woreda";
  }

  td:nth-child(9)::before{
    content: "Status";
  }


  td{
    text-align: right;
  }

  td::before{
    float: left;
    margin-right: 5rem;
    font-weight: bold;
  }
}



</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>customers</title>

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
                        <h1 class="page-head-line">Customer Information
                      
						
						
		  
				
					
				     
						   
		
						</h1>
                    </div>
                </div>
				
                
                <!-- /. ROW  -->
<?php

	$sql = "SELECT customer_id,full_name,birth_date,age,phone,email,kebele,woreda,agent_id FROM customer";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>customer ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BIRTH DATE</th>\n";
    echo "    <th>AGE</th>\n";
    echo "    <th>PHONE</th>\n";
     echo "    <th>EMAIL</th>\n";
     echo "    <th>KEBELE</th>\n";
	echo "    <th>WOREDA</th>\n";
	echo "    <th>STATUS</th>\n";
    echo "  </tr>";
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		
		echo "<tr>\n";
		echo "    <td>".$row["customer_id"]."</td>\n";
		echo "    <td>".$row["full_name"]."</td>\n";
		echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["age"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["email"]."</td>\n";
		echo "    <td>".$row["kebele"]."</td>\n";
		echo "    <td>".$row["woreda"]."</td>\n";
		echo "    <td>"."<a href='customerStatus.php?customer_id=".$row["customer_id"]. "'>Customer Status</a>"."</td>\n";
		

	}
	}
?>

            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>
