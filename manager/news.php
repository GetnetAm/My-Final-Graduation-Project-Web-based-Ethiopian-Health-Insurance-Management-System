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


</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>news</title>

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
                        <h1 style="color:gold; background-color:black; text-align: center;" class="page-head-line">news Informations 
                            <button class="btn" align="center"> 
                        <a href="add_news.php" class="btn">Add news</a>
                        </button>

			
						</h1>
                    </div>
                </div>
                
           
                <?php
include'../connection.php';
if (isset($_GET['del'])) {
    $del_id=$_GET['del'];
    $delete="DELETE FROM news WHERE news_id='$del_id'";
     $run_delete=mysqli_query($conn,$delete);
    if ($run_delete===true) {
 echo "your are succsesfuly deleted";
        }
}

                ?>


<table>
    <thead>
        <tr>
            <th>News Id</th>
            <th>Date</th>
            <th>News Header</th>
            <th>News Description</th>
            <th>Image</th>
            <th>Update</th>
            <th>Remove</th>

        </tr>
    </thead>


<tbody>

                        <?php include '../connection.php';


                        $select="SELECT *FROM news";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $news_id=$row_user['news_id'];
                        $date=$row_user['date'];
                        $news_header=$row_user['news_header'];
                        $news_discription=$row_user['news_discripion'];
            
                        $image=$row_user['image'];

                        ?>


                    <td><?php echo $news_id ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $news_header ?></td>
                    <td><?php echo $news_discription ?></td>
                    <td> <img style="align-content: center; height: 60px; width: 60px;" src="../upload/<?php echo $image;?>" alt="news photo" alt="logo">
                        </td>
                    
                 
                        <td><a class="btn btn-green" href="edit_news.php?news_id=<?php echo $news_id;?>">Update</a></td>;
                      <td><a class="btn btn-danger" href="news.php?del=<?php echo $news_id ?>">Delete</a></td>
                          
                    </tr>


                <?php } ?>

                     </tbody>
                    </table>

                    <!-- Notification part -->






    <!-- Banks/agent part -->




   

   
   

                        
		  
		  
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->



	
</body>
</html>
