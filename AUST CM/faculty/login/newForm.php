<?php
	session_start();
	include 'dbh.php';
	include 'LoginForm.php';
	include 'signup.php';
	
	
		if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
			
			$_SESSION['mail3'] = "Invalid Email";
            $errors['mail3'] = "Invalid Email";
		}
        

        if(count($errors) == 0)
        {
     	 $name = $_POST['name'];
		$id = $_POST["id"];
		$mail = $_POST["mail"];
		$psd = $_POST["psd"];
		$conn = mysqli_connect("localhost","root","","university");

		$sql = "INSERT INTO faculty(NAME , ID , EMAIL , PASSWORD) 
		values ('$name','$id','$mail','$psd')";
		$result = mysqli_query($conn,$sql);
		$_SESSION['name1']=null;
		$_SESSION['name2'] = null;
		$_SESSION['id1'] = null;
		$_SESSION['id2'] = null;
		$_SESSION['mail1'] =null;
		$_SESSION['mail2'] = null;
		$_SESSION['mail3'] = null;
		$_SESSION['password1'] = null;
		$_SESSION['password2'] = null;


		header("Location: ../../faculty/faculty_page.php");	
        }
        else
        {
 		//$_POST = null;
       	//header("Location: formLogin.php");	
        }




?>