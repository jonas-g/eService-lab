<?php
require 'include/bootstrap.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = mysqli_real_escape_string($conn, test_input($_POST["email"]));
	$password = mysqli_real_escape_string($conn, test_input($_POST["password"]));

	$sql = "SELECT username, password, salt, user_id FROM user WHERE email = '$email'";
	$result = db_fetch($sql);
	
	$hash = $result['password'];
	$salt = $result['salt'];
	$username = $result['username'];
	$userid = $result['user_id'];

	if ($hash == (sha1($salt . $password))) {
		$_SESSION['current_user'] = $email;
		$_SESSION['current_username'] = $username;
		$_SESSION['current_userid'] = $userid;
		echo "Inloggad";
	} else  {
		echo "Inloggningen misslyckades";
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