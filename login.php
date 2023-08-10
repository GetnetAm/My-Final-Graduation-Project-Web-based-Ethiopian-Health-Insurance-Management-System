<?php
session_start();


if (isset($_COOKIE['login'])) {
	header("Location:"._COOKIE['page'].".php");
}
else{
	header("Location: login_form.php");

}

// initializing variables
$username = "";
$email    = "";
$errors = array();

	include ('connection.php');
	   $select=$_POST['select1'];

switch ($select) {
		case 'None':
			header("Location: login_form.php?error=Please Select Your Role");	

				break;

	case 'Admin':

      
             $username=$_POST['username'];
		  
		         $password=$_POST['password'];

	if (isset($_POST['login'])) 
	{

			
		        $sql="SELECT *FROM admin WHERE username='$username' and password = '$password' ";
			
		        $result = $conn->query($sql);        
			
		        //$run=mysqli_query($conn,$sql);
			
		        $row_user=mysqli_fetch_array($result);

	if(mysqli_num_rows($result) > 0)
	{
					  $db_user=$row_user['username'];
					  $db_password=$row_user['password'];

			if ($username==$db_user && $password==$db_password) {

				setcookie("login",$username,time()+21600);
				setcookie("page",$row[2], time()+21600);
				header("location:".$row[2].".php");
					
						$_SESSION['adminLogIn'] = $username;
				  	$_SESSION['success'] = "You are now logged in";
				  	header('location: admin/adminhome.php');
					  //header("location:index2.php");
					  //echo "<script>windo.open('home.php','_self');</script>";
			}
		}

		else
		{
			  header("Location: login_form.php?error=You Have Inserted Incorrect Username and Password");
		}
}



	break;
	
	case 'Manager':
		   $username=$_POST['username'];
		   $password=$_POST['password'];

	if (isset($_POST['login'])) 
		{
			   $password = md5($password);
			   $password =substr($password, 0 , strlen($password) - 2);
			   $sql="SELECT *FROM manager WHERE username='$username' and password = '$password' ";
			   $result = $conn->query($sql);        
			   //$run=mysqli_query($conn,$sql);
			   $row_user=mysqli_fetch_array($result);

	if(mysqli_num_rows($result) > 0)
		 {
					
						$_SESSION['managerLogIn'] =$row_user['username'];
				  	$_SESSION['success'] = "You are now logged in";
				  	header('location: manager/home.php?success=Your password  and username  successfully mached');
		
	}
		else
		{
			header("Location: login_form.php?error=You Have Inserted Incorrect Username and Password");

		}
}

		break;


	  case 'Health Center':


             $username=$_POST['username'];
		         $password=$_POST['password'];

		if (isset($_POST['login'])) 
		{
						   $password = md5($password);
			          $password =substr($password, 0 , strlen($password) - 2);
			      $sql="SELECT *FROM health_center WHERE username='$username' and password = '$password' ";
			      $result = $conn->query($sql);        
			      //$run=mysqli_query($conn,$sql);
			      $row_user=mysqli_fetch_array($result);

		if(mysqli_num_rows($result) > 0)
		{
					   $db_user=$row_user['username'];
					   $db_password=$row_user['password'];

			if ($username==$db_user && $password==$db_password) {
					
						$_SESSION['healthCenterLoggedIn'] = $username;
				  	$_SESSION['success'] = "You are now logged in";
				  	header('location: health center/home_health_center.php');
			}

		}

		else
		{
			   header("Location: login_form.php?error=You Have Inserted Incorrect Username and Password");
		}
}

    break;


	  case 'Red Cross':
		   $username=$_POST['username'];
		   $password=$_POST['password'];

	if (isset($_POST['login'])) 
		{
			    $password = md5($password);
							   $enc=base64_encode($password);
							  echo base64_decode($enc);
						$sql="SELECT *FROM red_cross WHERE username='$username' and password = '$password' ";
			   $result = $conn->query($sql);        
			   //$run=mysqli_query($conn,$sql);
			   $row_user=mysqli_fetch_array($result);

	if(mysqli_num_rows($result) > 0)
		 {
					
						$_SESSION['redCrossLoggedIn'] =$row_user['username'];
				  	$_SESSION['success'] = "You are now logged in";
				  	header('location: red cross/home_red_cross.php?success=Your password  and username  successfully mached');
		
	}
		else
		{
			header("Location: login_form.php?error=You Have Inserted Incorrect Username and Password");

		}
}

		break;

	  case 'Kebele Admin':


            $username=$_POST['username'];
		        $password=$_POST['password'];

		if (isset($_POST['login'])) 
		{
							   $password = md5($password);
							   $enc=base64_encode($password);
							  echo base64_decode($enc);
			          $sql="SELECT *FROM kebeleadmin WHERE username='$username' and password = '$password' ";
			       $result = $conn->query($sql);        
			       //$run=mysqli_query($conn,$sql);
			       $row_user=mysqli_fetch_array($result);

		if(mysqli_num_rows($result) > 0)
		{
					   $db_user=$row_user['username'];
					   $db_password=$row_user['password'];

		if ($username==$db_user && $password==$db_password) {
					
						  $_SESSION['kebeleAdminLogIn'] = $username;
				  	  $_SESSION['success'] = "You are now logged in";
				  	  header('location: kebeleadmin/homekebele.php');

			}

		}

		else
		{
			     header("Location: login_form.php?error=You Have Inserted Incorrect Username and Password");
		}
}


		break;

	  case 'Customer':
		   $username=$_POST['username'];
		   $password=$_POST['password'];

	if (isset($_POST['login'])) 
		{
			   $password = md5($password);
			   $password =substr($password, 0 , strlen($password) - 2);
			   $sql="SELECT *FROM customer WHERE username='$username' and customer_password = '$password' ";
			   $result = $conn->query($sql);        
			   //$run=mysqli_query($conn,$sql);
			   $row_user=mysqli_fetch_array($result);

	if(mysqli_num_rows($result) > 0)
		 {
					
						$_SESSION['customerLogIn'] =$row_user['username'];
				  	$_SESSION['success'] = "You are now logged in";
				  header('location: customer/homecustomer.php');
		
	}
		else
		{
			header("Location: login_form.php?error=You Have Inserted Incorrect Username and Password");

		}
}










/*	break;

	  case 'Customer':

           $username=$_POST['username'];
		       $password=$_POST['password'];

		if (isset($_POST['login'])) 
		{
						    $password = md5($password);
							   $enc=base64_encode($password);
							  echo base64_decode($enc);
			      $sql="SELECT *FROM customer WHERE phone='$username' and customer_password = '$password' ";
			      $result = $conn->query($sql);        
			      //$run=mysqli_query($conn,$sql);
			      $row_user=mysqli_fetch_array($result);

		if(mysqli_num_rows($result) > 0)
		{
					   $db_user=$row_user['phone'];
					   $db_password=$row_user['customer_password'];

			if ($username==$db_user && $password==$db_password) {
					
						$_SESSION['customerLogIn'] = $username;
				  	$_SESSION['success'] = "You are now logged in";
				  	header('location: customer/homecustomer.php');
					  //header("location:index2.php");
					  //echo "<script>windo.open('home.php','_self');</script>";
			}

		}

		else
		{
			   header("Location: login_form.php?error=You Have Inserted Incorrect Username and Password");
		}
}

*/ 





}


  ?>