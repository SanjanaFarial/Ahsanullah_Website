<!DOCTYPE html>


	<html lang="en" class="no-js"> 
		<head>
			<meta charset="UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
			<meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
			<meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
			<meta name="author" content="Codrops" />
			<link rel="shortcut icon" href="../favicon.ico"> 
			<link rel="stylesheet" type="text/css" href="../CSS/Login/demo.css" />
			<link rel="stylesheet" type="text/css" href="../CSS/Login/style.css" />
			<link rel="stylesheet" type="text/css" href="../CSS/Login/animate-custom.css" />
    </head>
	<body>
        <div class="container">
            <header>
                
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="loginpage.php" method ="post" autocomplete="on"> 
                                <h1> Log in </h1> 
                                <p> 
                                    <label for="email" class="uname" data-icon="u" > Email  </label>
                                    <input id="email" name="email" required="required" type="text" placeholder="<?php 
            				         if(isset($_SESSION['login'])) echo $_SESSION['login'];?>"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" 
									placeholder="<?php if(isset($_SESSION['login'])) echo $_SESSION['login'];?>"/> 
            				 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in </label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Log In" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register" > Sign Up </a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  method="post" action="<?php if(count($errors) == 0) echo 'newForm.php' ?>" autocomplete="on"> 
                                <h1> Sign Up </h1> 
                                <p> 
                                    <label for="name" class="uname" data-icon="u"> Full Name </label>
                                    <input id="name" name="name" required="required" type="text" placeholder="Name" />
                                </p>
								<p> 
                                    <label for="id" class="uname" data-icon="u"> ID </label>
                                    <input id="id" name="id" required="required" type="text" placeholder="ID" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Email </label>
                                    <input id="email" name="email" required="required" type="email" placeholder="EMAIL"/> 
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder=""/>
                                </p>
                                <p> 
                                    <label for="password_confirm" class="youpasswd" data-icon="p">Confirm Password </label>
                                    <input id="password_confirm" name="password_confirm" required="required" type="password" placeholder=""/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="signup" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register">  Log In </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
		
		

    </body>
</html> <SCRIPT Language=VBScript>