<?php
session_start();
include "db_conn.php";

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['wpm_setgoals'])){
    
    function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $re_password = validate($_POST['re_password']);
    $wpm_setgoals = validate($_POST['wpm_setgoals']);
    
    
    if (empty($username)) {
		header("Location: signup.php?error=Username is required");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Password is required");
	    exit();
    }else if(empty($re_password)){
        header("Location: signup.php?error=Re-Password is required");
	    exit();
    }else if(empty($wpm_setgoals)){
        header("Location: signup.php?error=WPM Set Goals is required");
	    exit();
    }else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match");
	    exit();
    }else{
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, password, wpm_setgoals) VALUES('$username', '$password', '$wpm_setgoals')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred");
		        exit();
           }
		}
	}
}else{
    header("Location: signup.php");
    exit();
}
