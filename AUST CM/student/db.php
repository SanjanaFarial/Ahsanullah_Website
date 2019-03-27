<html>
<head>
 <?php
 
   $conn = mysqli_connect("localhost","root","","university");
	if(!$conn)
	{
		die("Connection Failed:".mysqli_connect_error());
	}

  $sql = "Select *from student";

  $result = mysqli_query( $conn,$sql);
    while($db_field = mysqli_fetch_assoc($result)){
     print $db_field['NAME']."<BR>";
	 print $db_field['ID']."<BR>";
	 print $db_field['EMAIL']."<BR>";
	 print $db_field['PASSWORD']."<BR>";
   }
   
   mysqli_close($conn);
   
   
 ?>

</head>

 <body>
 </body>

</html>