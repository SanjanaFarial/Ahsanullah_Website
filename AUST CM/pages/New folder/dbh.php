<?php

	$conn = mysqli_connect("localhost","root","","university");
	if(!$conn)
		{
				die("Connection Failed:".mysqli_connect_error());
		}


?>