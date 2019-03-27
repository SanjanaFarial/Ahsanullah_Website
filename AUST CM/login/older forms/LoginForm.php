<?php
	
	$errors = array();
  	
?>
<!DOCTYPE html>
<html>
	<head lang="en-US">
		<title>Login</title>
		<meta name="author" content="">
		<meta charset="UTF-8">
		<meta name="description" content="Login Page">
		<meta name="keywords" content="Login">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="mystyle2.css">
	</head>
</html>
	<body>
			

			<div id ="logIn">	
					<form action="loginpage.php" method="post">
							<h1 style="font-family:'Comic Sans Ms' ">Login</h1>
							
							<label for="uid">Email: </label>
							<input type="text" id="email" name="email" placeholder="<?php 
            				if(isset($_SESSION['login'])) echo $_SESSION['login'];?>">
							
							<label for="password">Password: </label>
							<input type="password" id="pass" name="pass" placeholder="<?php 
            				if(isset($_SESSION['login'])) echo $_SESSION['login'];?>">
							
							<input type="submit" value="Login" style="font-family:'Comic Sans Ms'">
							
					</form>
			</div>
			</div>

		
		
		
    </body>
</html>