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
			<div id ="signup">	
					<form action="<?php if(count($errors) == 0) echo 'newForm.php' ?>" method="post">
							<h1 style="font-family:'Comic Sans Ms' ">Create Account</h1>
							<label for="name">NAME: </label>
							<input type="text" id="name" name="name" placeholder="Name">
							
							<label for="lname">ID: </label>
							<input type="text" id="id" name="id" placeholder="Id">
							
							<label for="uid">EMAIL: </label>
							<input type="text" id="mail" name="mail" placeholder="email">
							
							<label for="password">PASSWORD: </label>
							<input type="password" id="psd" name="psd" placeholder="Password">
							
							<input type="submit" value="Signup">


							
					</form>
			</div>

			</div>

		
		
		
    </body>
</html>