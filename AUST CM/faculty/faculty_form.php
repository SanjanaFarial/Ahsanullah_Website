<!DOCTYPE html>

<?php
 
   $conn = mysqli_connect("localhost","root","","university");
	if(!$conn)
	{
		die("Connection Failed:".mysqli_connect_error());
	}

  $sql = "Select *from student";

  $result = mysqli_query( $conn,$sql);
	
    while($db_field = mysqli_fetch_assoc($result)){
		
		
		$name=$db_field['NAME'];
		$id=$db_field['ID'];
		$email=$db_field['EMAIL'];
		$password=$db_field['PASSWORD'];
		$year=$db_field['Year'];
		$semester=$db_field['Semester'];
     //print $db_field['NAME']."<BR>";
	// print $db_field['ID']."<BR>";
	 //print $db_field['EMAIL']."<BR>";
	 //print $db_field['PASSWORD']."<BR>";
   }
   
   if(isset($_POST['done']))
  {
		$target ="images/".basename($_FILES['image']['name']);
		
		$image=$_FILES['image']['name'];
	
		$name2=$_POST['name'];
		$id2=$_POST['id'];
		$email2=$_POST['email'];
		$password2=$_POST['password'];
		$year2=$_POST['year'];
		$semester2=$_POST['semester'];
		
		$sql2= "UPDATE student SET 
        image=$image
	    WHERE ID='14.02.04.067'"
		;
		$result = mysqli_query( $conn,$sql2);
  }
	
	/*$sql2= "UPDATE student SET 
		NAME='$name2',
		ID='$id2',
		EMAIL='$email2',
		PASSWORD='$password2',
		Year=$year2,
		Semester='$semester2,
        image=$image
	    WHERE ID='14.02.04.067'"*/
	
   mysqli_close($conn);
   
   
 ?>
 
 
 

<html>
<head>
<title>Ahsanullah University of Science and Technology</title>

<link href="../CSS/Home/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
      <h1><a href="index.html">AUST CM</a></h1>
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
        <li><a href="../index.html">Home</a></li>
        <li><a class="drop" href="#">Courses</a>
          <ul>
            <li><a href="course1.php">Course 1</a></li>
            <li><a href="course1.php">Course 2</a></li>
            <li><a href="course1.php">Course 3</a></li>
            <li><a href="course1.php">Course 4</a></li>
            <li><a href="course1.php">Course 5</a></li>
            
          </ul>
        </li>
        
          
        </li>
        <li><a href="routine.php">Class Routine</a></li>
		<li class="active" ><a class="drop" href="#">Profile</a>
		<ul>
		    <li><a href="faculty_page.php">View</a></li>  
            <li><a href="../index.html">Log Out</a></li>         
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
      <h1>Profile</h1>
      
      
      
	  
	  
      
      <div class="details">
		 
		 
		<img class="imgl borderedbox" src="../images/demo/120x120.gif" alt=""> <br> <br>
		
		<br><br>
		<br>
		<input type="hidden" name="size" value="1000000"> 
		
		<input type="file" name="image" > <br> <br>
		
		Name: <input type="text" name="name" value ="<?php  print $name; ?> ">  <br> <br>
		                    
		Student ID: <input type="text" name="id" value ="<?php  print $id; ?> "> <br> <br>
		
		Email: <input type="text" name="email" value ="<?php  print $email; ?> ">    <br><br>
		
		Password: <input type="text" name="password" value ="<?php  print $password; ?> ">    <br><br>
		
		Year:  <input type="text" name="year" value ="  <?php  print $year; ?>  ">  <br><br>
		
		Semester:   <input type="text" name="semester" value = "  <?php  print $semester; ?>  ">  <br><br>
		
		
		<form action="student_page.php">
		
			<input type="submit" name="done" value="Done" />
			
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