<!DOCTYPE html>
<?php
	
	$errors = array();
  	
?>
<html>
<head>
<title>Ahsanullah University of Science and Technology</title>

<link href="../../CSS/Home/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">AUST Curriculum Management</a></h1>
      <p>Ahsanullah University of Science and Technology</p>
    </div>
    
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="../../index.html">Home</a></li>
        <li><a class="drop" href="#">Departments</a>
          <ul>
            <li><a href="../../boot/civil.html">Civil</a></li>
            <li><a href="../../boot/cse.html">CSE</a></li>
            <li><a href="../../boot/eee.html">EEE</a></li>
            <li><a href="../../boot/textile.html">Textile</a></li>
            <li><a href="../../boot/ipe.html">IPE</a></li>
            <li><a href="../../boot/me.html">ME</a></li>
			 <li><a href="../../boot/bba.html">BBA</a></li>
         
          </ul>
        </li>
        
          
        </li>
        <li><a href="#">About AUST</a></li>
      <li><a href="../../pages/newandevents.html">News and Events</a></li>
		<li><a class="drop" href="#">Login As</a>
		<ul>
             <li><a href="../../faculty/login/LoginForm.php">Faculty</a></li>
                <li><a href="LoginForm.php">Student</a></li>
				<li><a href="../../login/LoginForm.php">Admin</a></li>
            
          </ul>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
  
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
        <div id ="logIn">	
					<form action="loginpage.php" method="post">
							<h1 style="font-family:'Comic Sans Ms' ">Login</h1>
							
							<label for="uid">Email: </label>
							<input type="text" id="email" name="email" placeholder="<?php 
            				if(isset($_SESSION['login'])) echo $_SESSION['login'];?>"> <br>
							
							<label for="password">Password: </label>
							<input type="password" id="pass" name="pass" placeholder="<?php 
            				if(isset($_SESSION['login'])) echo $_SESSION['login'];?>">
							
							<br> 
							
							<input type="submit" value="Login" style="font-family:'Comic Sans Ms'">
							
							<br><br> 
							
					</form>
					
					
							
				<form action="signup.php">
							    
					Not Registered Yet? 
		
					<br> <br> <input type="submit" name="signup" value="Sign Up" />
			
			  </form>
		</div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="../CSS/Home/images/demo/worldmap.png" alt="">
          <figcaption><a href="https://www.google.com/maps/place/122+Love+Rd,+Dhaka+1208,+Bangladesh/@23.763467,90.4038468,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c77d9630a5ed:0x1cc5ae795ddc3172!8m2!3d23.763467!4d90.4060355">
		  Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
		    Ahsanullah University of Science & Technology<br>
			141 & 142, Love Road, Tejgaon Industrial Area, Dhaka-1208.<br>
				
        <br>
		
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="https://www.facebook.com/AUST.BD"><i class="fa fa-facebook"></i></a></li>
        </ul>
        
        </address>
      </div>
      <div class="one_third">
        
        <i class="fa fa-phone pright-10"></i> (8802) 8870422   Ext. 107, 114 <br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">info@aust.edu, regr@aust.edu</a>
		<br>Fax : </i>(8802) 8870417-18<br>
      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>