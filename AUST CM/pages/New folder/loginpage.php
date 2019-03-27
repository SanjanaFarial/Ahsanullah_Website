<?php
	session_start();
	include 'dbh.php';
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM student WHERE EMAIL = '$email' AND PASSWORD ='$password'" ;
	$result = mysqli_query($conn,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Your email and password is incorrect";
	}
	else{
		$_SESSION['ID'] = $row['ID'];
		$_SESSION['NAME'] = $row['NAME'];

	}
	if(isset($_SESSION['ID']))
	{
		echo "You are  connected with database /// please insert here your homepage ";	
		header("Location:../index.html");
	}
	else
	{
	$_SESSION['login']="Must use valid username or password";
	$_POST = null;
	header("Location: signin.php");

	}	

?>