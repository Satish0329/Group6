<?php
	include 'db.php';
	session_start();     
	$name = $_POST['username'];
	$pass = $_POST['password'];
	$_SESSION["name"] = $name;
	$_SESSION["password"] = $pass;
    $query = "SELECT name,password FROM students";
	
    $result = mysqli_query($link,$query);
	
    while($row = mysqli_fetch_array($result)){
                
		if(($row['name']==$name)&&($row['password']==$pass)){
			echo "Logged Sucessfully!";
			
			//header("Location: http://localhost/remote_health_care/Appointments.php");
			break;
		}
    }
	
?>