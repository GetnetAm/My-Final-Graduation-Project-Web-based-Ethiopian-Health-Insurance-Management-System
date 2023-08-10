<?php 
session_start();

if (isset($_SESSION['adminLogIn']) && isset($_SESSION['adminLogIn'])) {

    include "../connection.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: settings.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: settings.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: settings.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = $op;
    	$np = $np;
        $username = $_SESSION['adminLogIn'];

        

        $sql = "SELECT password
                FROM admin WHERE 
                username='$username' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){

        

        	
        	$sql_2 = "UPDATE admin
        	          SET password='$np'
        	          WHERE username='$username'";
        	mysqli_query($conn, $sql_2);
        	header("Location: settings.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: settings.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: settings.php");
	exit();
}

}else{
     header("Location: login_form.php");
     exit();
}