<!DOCTYPE html>
<html>
<head>
<style>




/*change password css style*/


body {
    background: #1690A7;
    display: flex;
    justify-content: center;
    align-items: center;
    
    flex-direction: column;
}

*{
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    width: 350px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
}

h2 {
    text-align: center;
    margin-bottom: 40px;
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}
label {
    color: #888;
    font-size: 18px;
    padding: 10px;
}

button {
    float: right;
    background: gray;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}
button:hover{
    opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
    text-align: center;
    color: #fff;
}

.ca {
    font-size: 14px;
    display: inline-block;
    padding: 10px;
    text-decoration: none;
    color: #444;
}
.ca:hover {
    text-decoration: underline;
} 

.home-nav a {
    padding: 10px;
    color: #f7bd65;
    text-transform: uppercase;
    text-decoration: none;
}



















@media(max-width: 750px){

    #page-wrapper{
        position: absolute;
        top: 900px;
        left: 0;
        width: 450px;
        text-align: center;

    }
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>casher's Status</title>
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
$customerUserName = $_SESSION["customerLogIn"];

?>
      

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <h1>You can change Your password</h1>

            <?php 


if (isset($_SESSION['customerLogIn']) && isset($_SESSION['customerLogIn'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="change-p.php" method="post">
        <h2>Change Password</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Old Password</label>
        <input type="password" 
               name="op" 
               placeholder="Old Password">
               <br>

        <label>New Password</label>
        <input type="password" 
               name="np" 
               placeholder="New Password">
               <br>

        <label>Confirm New Password</label>
        <input type="password" 
               name="c_np" 
               placeholder="Confirm New Password">
               <br>

        <button type="submit">CHANGE</button>
          <a href="homecustomer.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: login_form.php");
     exit();
}
 ?>
            
 
    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
