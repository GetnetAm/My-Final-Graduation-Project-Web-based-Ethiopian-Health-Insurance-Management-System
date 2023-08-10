<!DOCTYPE html>
<html>
<head>
	<title>server part</title>
<style type="text/css">
<!--
.style7 {
	font-family: "Adine Kirnberg";
	font-size: 36px;
}
.style211{
	color: red;
	background-color: black;
	font-size: 30px;
	font-weight: bold;
	font-family: italic;
}
.style11 {
	font-size: 12px;
	font-weight: bold;
}
.style20 {font-size: 12; color: #000000; }
.style21 {color: red;}



-->
</style>
</head>
<body>

<?php


      $conn=mysqli_connect('localhost','root','','main_adivanced_dbone_2');
      $name="";
      $address="";
      $text="";


      $errors=array();

if (isset($_POST['submit'])) {

       $name=mysqli_real_escape_string($conn,$_POST['name']);
       $address=mysqli_real_escape_string($conn,$_POST['address']);
       $text=mysqli_real_escape_string($conn,$_POST['text']);



}

?>


<?php
       $check=0;



if(isset($_POST['submit']))
{
		if(is_numeric($_POST['name'])||strlen($_POST['name'])>30)
		{
		$check+=1;
		array_push($errors, "<span class='style21'>Not a valid full name</span>");
		
		}
		if($_POST['name']=="")
		{
		$check+=1;
		array_push($errors,"<span class='style21'>Please enter your your full name</span>");
		
		}
		}
		?>





<?php 
			if(isset($_POST['submit']))
			{
				if(is_numeric($_POST['address'])||strlen($_POST['address'])>30)
				{
				$check+=1;

				echo "<span class='style21'>Not a valid address</span>";
				array_push($errors, );


				}
				if($_POST['address']=="")
				{
				$check+=1;

				array_push($errors, "<span class='style21'>Please enter your address</span>");

				}
				}
				?>


	<?php 
			if(isset($_POST['submit']))
			{
				if(is_numeric($_POST['text'])||strlen($_POST['text'])>200)
				{
				$check+=1;

				array_push($errors, "<span class='style21'> it is allowed only 200 leters</span>");
				}
				if($_POST['text']=="")
				{
				$check+=1;

				array_push($errors, "<span class='style21'>Please enter your comment</span>");

				}
				}
				?>



<?php
if (empty($name) ||empty($address) ||empty($text)) {


	//array_push($errors, "<span class='style21'>Please enter full fill all information</span>");
	# code...

//}elseif ($password_1!==$password_2) {

	//array_push($errors, );

	//echo "do not mach the two password";
}

/*
if (empty($username)||empty($password_1)||empty($password_2)||empty($cname)||empty($fullname)||empty($sex)||empty($age)||empty($email)empty($phone)||empty($country)||empty($city)) {

	echo "error";
}elseif ($password_1!==$password_2) {
	echo "password not mach";
}

*/

else{





     $insert ="INSERT INTO comment(name,address,text) VALUES('$name','$address','$text')";


     $run_insert=mysqli_query($conn,$insert);
if ($run_insert) {
    // array_push($errors, "<span class='style211'> Completly Inserted Data</span>");

      echo "አስተያትየትዎን ስለሰጡን እናመሰኛለን";

	//header("Location:view.php");

	//move_uploaded_file($tmp_name,"upload/$image");
}

else{

	die(mysqli_error($conn));

}

}


?>




</body>
</html>