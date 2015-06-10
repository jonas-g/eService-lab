<?php
	require 'include/bootstrap.php';
		
	$username_error = $email_error = $password_error = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["username"])) {
			$username_error = "Användarnamn saknas. (Server-side error)";
			echo $username_error;
		} else {
			$username = mysqli_real_escape_string($conn, test_input($_POST["username"]));
			//$namn = $_POST["username"];
			if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
				$username_error = "Bara bokstäver och mellanslag tillåtna i namnet. (Server-side error)";
				echo $username_error;
			}
		}
		if (empty($_POST["email"])) {
			$email_error = "E-postadress saknas. (Server-side error)";
			echo $email_error;
		} else {
			$email = mysqli_real_escape_string($conn, test_input($_POST["email"]));
			$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
			if (!preg_match($regex, $email)) {
				$email_error = "Ogiltig e-postadress. (Server-side error)";
				echo $email_error;
			}
		}
		if (empty($_POST["password"])) {
			$password_error = "Lösenord saknas. (Server-side error)";
			echo $password_error;
		} else {
			$password = mysqli_real_escape_string($conn, test_input($_POST["password"]));
			if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,48}$/', $password)) {
				$password_error = "Lösenordet måste innehålla minst en siffra, minst en bokstav, inga andra specialtecken än !@#€%, och totalt minst 8 tecken långt. (Server-side error)";
				echo $password_error;
			}
		}
		
		if ($username_error == "" && $email_error == "" && $password_error == "") {
			$salt = unique_salt();
			$hash = sha1($salt . $password);
			
			if (db_fetch("SELECT user_id FROM user WHERE email = '$email'") == null) {
				$sql = "INSERT INTO user(username, email, password, salt) VALUES ('$username', '$email', '$hash', '$salt')";
				$query = db_query($sql);
		
				if ($query) {
					echo "Registrering lyckades";
					
				} else  {
					echo "Registrering misslyckades";
				}
			} else {
				echo "E-postkonto redan registrerat";
			}
	
			
		}
	}


?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="1; url=index.php">
	</head>
	<body></body>
</html>