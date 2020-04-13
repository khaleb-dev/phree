<?php
	
	if (isset($_POST['signup-submit'])) {
	
		require 'connect.inc.php';

		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		$passwordRepeat = $_POST['pwd-repeat'];
		
		
	
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
			echo 'Invalid E-mail and Username';
			header ("location: ../index.html?error=invalidemailuserid");
				
			exit();
			} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo 'Invalid E-mail';
				header ("location: ../index.html?error=invalidmail");
			exit();
			}
		
			if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
				echo 'Invalid Username';
				header ("location: ../index.html?error=invaliduserid&mail".$email);
			exit();
			}
	
		if ($password !== $passwordRepeat){ 
			echo 'Password do not match';
			header ("location: ../index.html?error=passwordnotmatch");
		exit();
		} else {
			$sql = "SELECT username FROM signup WHERE username = ?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				echo 'Error: Unable to Connect';
				header ("location: ../index.html?error=dberror");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0){
					echo 'Sorry, User Already Exist';
					eader ("location: ../index.html?error=useralreadyexist&mail=".$email);
					exit();
				} else {
					$sql = "INSERT INTO signup (username, email, password) VALUES(?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)){
						echo 'Unexpected Error Occured';
						header ("location: ../index.html?error=sqlerror");
						exit();
					} else {
						$hashedPwd = password_hash ($password, PASSWORD_DEFAULT);
					
						mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
						mysqli_stmt_execute($stmt);
						echo 'Signup Succesful, Proceed to login';
						header ("location: ../index.html?signup=success");
						exit();
					}
				}
			}
		}
	
		mysqli_stmt_close($stmt);
		mysqli_close($conn);

	}
	else {
		header ("location: ../index.html");
		exit();
	}