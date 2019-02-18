<?php
	function authenticate($email, $key){
		require_once("db_connection.php");
		$hashed_key = hash('sha512', $key);
		$query = "SELECT user_key, name FROM users WHERE user_email = '$email';";
		if($result = getResult($query)){
			if(mysqli_num_rows($result) == 1){
				$row = mysqli_fetch_array($result);
				if($row['user_key'] == $hashed_key){
					//correct password
					session_start();
					$_SESSION['name'] = $row['name'];
					$_SESSION['email'] = $email;
					header("Location: marks.html");
				}
				else{
					//wrong password
					header("Location: index.html?error=incorrect");
				}
			}
			else{
				//email not registered
				header("Location: index.html?error=notexists");
			}
		}
		else{
			header("Location: index.html?error=yes");
		}
	}
?>