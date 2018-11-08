<!doctype html>
 <?php
	$msg="";
	session_start();
	if (isset($_POST['login']) && !empty($_POST['username']) 
	   && !empty($_POST['password'])) 	//check of alles is ingevuld.
	{
		
	   if ($_POST['username'] == 'Rob' && 
		  $_POST['password'] == 'Site') 
		{
			$_SESSION['login']= TRUE;
			header( "Location: upload.php" );
		}
		else
		{
			$msg= "Username of Password is onjuist";
		}
	}
 ?>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
		integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	</head>
	<body>
         <form method = "post">
            <h2><?php echo $msg; ?></h2>
            <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus>
            <input type = "password" class = "form-control" name = "password" placeholder = "password" required>
            <input type = "submit" value="Login"name = "login">
         </form>
	</body>
</html>