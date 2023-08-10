
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>crude1</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bottstrap vs jq/bootstrap/css/
	bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="C:/wamp64/www/summer war pro/bottstrap vs jq/fontawesome-free-5.12.1-web/css/all.css">
		<style type="text/css">
		*{
	margin: 0px;
	padding: 0px;

}

:root{
  --green:#27ae60;
  --black:#444;
  --light-color:#777;
  --bg-color:#e6e6e6;
  --border: 1rem solid rgba(0,0,0,.2);
  --box-shadow:.4rem .4rem 1rem #ccc,
          -.4rem -.4rem 1rem #fff;
    --box-shadow-inset:.4rem .4rem 1rem #ccc inset,
            -.4rem -.4rem 1rem #fff inset;
}
body{
	font-size: 120%;
	background:#f8f8ff;
}
.header{
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background:#5f9ea0;
	text-align: center;
	border: 1px solid #b0c4de;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form{
	width: 30%;
	margin: 0px auto;
	padding:20px;
	border:1px solid #b0c4de;
	background:white;
	border-radius: 0px 0px 10px 10px;
}

.input-group{
	margin: 10px 0px 10px 0px;
}
.input-group label{
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size:16px;
	border-radius: 5px;
	border:1px solid gray; 
}
.btn{
  margin-top: 1rem;
  display: inline-block;
  padding: 1rem 3.5rem;
  border-radius: .5rem;
  font-size: 1.7rem;
  cursor: pointer;
  background: none;
  color: var(--black);
  box-shadow: var(--box-shadow);
}

.btn:hover{
  box-shadow: var(--box-shadow-inset);
  color: var(--green);
}
.error{
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border:1px solid #a94442;
	color: red;
	background:#f2dede;
	text-align: left;
}

p{
	text-align: right;
}



	</style>


</head>
<body>

<div class="header">
	<h2 style="background-color:black"><strong><span style="color: green ;font-size: 45px;">Recovery</span><span style="color: yellow;">Your</span><span style="color: red;">Password</span></strong></h2>
	<p>Please enter your email address you used to sign up on this site and we will assist you in recovering your password.</p>

</div>

<form method="POST" action="login.php">
	<div class="input-group">

		<label>Select your role</label>
	<select name="select1" class="form-control" id="select2">
		<option>None</option>
		<option>Admin</option>
		<option>Hospital Manager</option>
		<option>Casher</option>
		<option>Kebele Admin</option>
		<option>Customer</option>

				
	</select>
	</div>


<div class="input-group">
		<label>E-mail</label>
		<input type="email"name="email" value="">

	</div>
	
	<a href="password_message.php">recovery Password</a>


</form>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>