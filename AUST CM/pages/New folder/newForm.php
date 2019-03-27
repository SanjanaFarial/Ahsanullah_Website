<?php
	session_start();
	include 'dbh.php';
	include 'LoginForm.php';
   
        if(empty($_POST['name']))
        {
            $_SESSION['Name1'] = "Your name cannot be empty";
            $errors['Name'] = "Your name cannot be empty";
        }
        if(strlen($_POST['name']) < 2)
        {
            $_SESSION['Name2'] = "Your first name must be atleast 2 characters long";
             $errors['Name2'] = "Your first name must be atleast 2 characters long";
        }

        if(empty($_POST['id']))
        {
            $_SESSION['ID1'] = "Your last name cannot be empty";
             $errors['ID1'] = "Your last name cannot be empty";
        }
        if(strlen($_POST['id']) < 12)
        {
            $_SESSION['ID2'] = "Last name must be atleast 12 characters long";
            $errors['ID2'] = "Last name must be atleast 12 characters long";
        }

        if(empty($_POST['email']))
        {
            $_SESSION['email1'] = "User ID cannot be empty";
            $errors['email1'] = "User ID cannot be empty";

        }
        if(strlen($_POST['email']) < 6)
        {
            $_SESSION['email2'] = "User ID must be atleat 6 characters long";
            $errors['email2'] = "User ID must be atleat 6 characters long";
        }
		if (strpos($_POST['email'], '@')== false && strpos($_POST['email'], '.com')== false) {
			
			$_SESSION['email3'] = "Invalid Email";
            $errors['email3'] = "Invalid Email";
		}

        if(empty($_POST['password']))
        {
            $_SESSION['password1'] = "Password cannot be empty";
            $errors['password1'] = "Password cannot be empty";
        }
        if(strlen($_POST['password']) < 3)
        {
            $_SESSION['password2'] = "Password must be atlest 3 characters long";
            $errors['password2'] = "Password must be atlest 3 characters long";
        }
		if($_POST['password_confirm'] != $_POST['password'])
        {
            $_SESSION['passwordC1'] = "Password doesn't match";
            $errors['passwordC1'] = "Password doesn't match";
        }
		if(empty($_POST['password_confirm']))
        {
            $_SESSION['passwordC2'] = "Password cannot be empty";
            $errors['passwordC2'] = "Password cannot be empty";
        }
        if(strlen($_POST['password_confirm']) < 3)
        {
            $_SESSION['passwordC3'] = "Password must be atlest 3 characters long";
            $errors['passwordC3'] = "Password must be atlest 3 characters long";
        }

        if(count($errors) == 0)
        {
     	 $name = $_POST['name'];
		$id = $_POST["id"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$conn = mysqli_connect("localhost","root","","university");

		$sql = "INSERT INTO student(NAME , ID , EMAIL , PASSWORD) 
		values ('$name','$id','$email','$password')";
		$result = mysqli_query($conn,$sql);
		$_SESSION['Name1']=null;
		$_SESSION['Name2'] = null;
		
		$_SESSION['ID1'] = null;
		$_SESSION['ID2'] = null;
		
		$_SESSION['email1'] =null;
		$_SESSION['email2'] = null;
		$_SESSION['email3'] = null;
		
		$_SESSION['password1'] = null;
		$_SESSION['password2'] = null;
		
		$_SESSION['passwordC1'] = null;
		$_SESSION['passwordC2'] = null;
		$_SESSION['passwordC3'] = null;



		//header("Location :formLogin.php");
        }
        else
        {
 		//$_POST = null;
       	//header("Location: formLogin.php");	
        }




?>