<?php
	session_start();
	include 'dbh.php';
	include 'LoginForm.php';
   
        

        if(count($errors) == 0)
        {
     	 $name = $_POST['name'];
		$id = $_POST["id"];
		$mail = $_POST["mail"];
		$psd = $_POST["psd"];
		$conn = mysqli_connect("localhost","root","","university");

		$sql = "INSERT INTO student(NAME , ID , EMAIL , PASSWORD) 
		values ('$name','$id','$mail','$psd')";
		$result = mysqli_query($conn,$sql);
		$_SESSION['firstName1']=null;
		$_SESSION['firstName2'] = null;
		$_SESSION['lastName1'] = null;
		$_SESSION['lastName'] = null;
		$_SESSION['uid1'] =null;
		$_SESSION['uid2'] = null;
		$_SESSION['password1'] = null;
		$_SESSION['password2'] = null;


		//header("Location :formLogin.php");
        }
        else
        {
 		//$_POST = null;
       	//header("Location: formLogin.php");	
        }




?>