<?php
		
	include 'db.php';
	$name = $_POST['username'];
	$pass = $_POST['password'];
	    //$_SESSION["email"] = $email; //throw email variable to other php page
	    //$_SESSION["password"] = $pass; //throw password variable to other php page
        $query = "SELECT name,password FROM students";
	    $flag = 1;
	
        $result = mysqli_query($link,$query);
	
        while($row = mysqli_fetch_array($result))
        {
                
			if(($row['name']==$name)&&($row['password']==$pass)){
				echo "Logged Sucessfully!";
				//header("Location: http://localhost/remote_health_care/patient.html");
				$flag=0;
				break;
			}
        }
	    if($flag==1){
			echo "Invalid UserId or password";
	    }
	    
?>

