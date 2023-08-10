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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Policy</h1>


                        <?php include 'connection.php';


                        $select="SELECT *FROM policy";

                        $run=mysqli_query($conn,$select);

                        while (
                    $row_user=mysqli_fetch_array($run)){
                        $policy_id=$row_user['policy_id'];
                        $anaualy=$row_user['anaualy'];
                        $one_four=$row_user['one_four'];
                        $five_egiht=$row_user['five_egiht'];
            

                        $nine_twelve=$row_user['nine_twelve'];
                        $free=$row_user['free'];

                        ?>




    <?php
include'connection.php';
if (isset($_GET['update'])) {
    $edit_id=$_GET['update'];

     $select="SELECT *FROM policy";

             $run=mysqli_query($conn,$select);

        $row_user=mysqli_fetch_array($run);
             $policy_id=$row_user['policy_id'];
             $anaualy=$row_user['anaualy'];
            $one_four=$row_user['one_four'];
             $five_egiht=$row_user['five_egiht'];
            

            $nine_twelve=$row_user['nine_twelve'];
             $free=$row_user['free'];

}

                ?>

                       
						
                    
                

<form action="policy_update.php" method="post" enctype="multipart/form-data">


Policy Id:           <input type="text" name="policy_id" value="<?php echo $policy_id;?>" required><br>
Acadamic Year:           <input type="text" name="anaualy" value="<?php echo $anaualy;?>" required><br>
One to Four Family Payment:         <input type="text" name="one_four" value="<?php echo $one_four;?>" required><br>
Five_Eight Family Payment    <input type="text" name="five_egiht" value="<?php echo $five_egiht;?>" required><br>
Nine to Tewelve Family Payment:       <input type="text" name="nine_twelve" value="<?php echo $nine_twelve;?>" required><br>
Free Service:        <input type="text" name="free" value="<?php echo $free;?>" required><br>
<input type="submit" value="UPDATE">

</form>
			


                
<?php
   

        $policy_id      = $_POST["policy_id"];
        $anaualy=       $_POST["anaualy"];
        $one_four = $_POST["one_four"];
        $five_egiht           = $_POST["five_egiht"];
        $nine_twelve            = $_POST["nine_twelve"];
        $free      = $_POST["free"];
        

$insert="UPDATE policy SET policy_id='$policy_id',anaualy='$anaualy',one_four='$one_four',five_egiht='$five_egiht',nine_twelve='$nine_twelve',free='$free' WHERE policy_id='$edit_id'";
        

    
    if ($conn->query($insert) === true) {
            echo "Policy Update succsusfuly";  echo '</br>';
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
