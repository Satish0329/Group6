<?php
	include 'db.php';
	session_start();     
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$_SESSION["email"] = $email;
	$q = "INSERT INTO students (name,password,email) VALUES ('$uname','$pass','$email')";
    if(mysqli_query($link,$q)){
   	     	//$qu = "UPDATE Doctor_table SET Logged_in=1 WHERE email='$email'";
			//mysqli_query($link,$qu);
			//header("Location: http://localhost/Remote_health_care/Appointments.php");
		echo "you are successfully registered and logged";
    }
        else{
    	    	echo "Error";
        }
?>
