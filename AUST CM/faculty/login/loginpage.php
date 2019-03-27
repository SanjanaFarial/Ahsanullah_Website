<?php
	session_start();
	include 'dbh.php';
	$email = $_POST["email"];
	$password = $_POST["pass"];

	$sql = "SELECT * FROM faculty WHERE EMAIL = '$email' AND PASSWORD ='$password'" ;
	$result = mysqli_query($conn,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Your username and password is incorrect";
	}
	else{
		$_SESSION['ID'] = $row['ID'];

	}
	if(isset($_SESSION['ID']))
	{
		echo "You are  connected with database /// please insert here your homepage ";
		header("Location: ../../faculty/faculty_page.php");		
	}
	else
	{
	$_SESSION['login']="Must use valid username or password";
	$_POST = null;
	header("Location: LoginForm.php");

	}	

?>