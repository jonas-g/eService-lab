<?php require 'include/bootstrap.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>REGISTER</title>
		<link rel="stylesheet"; href="assets/css/main.css"; type="text/css">
		<script src="/assets/js/main.js" type="text/javascript"></script>
	</head>
	<body>
		<h1>Registrering</h3>
		<?php

		?>
		<div id="register_box">
			<form name="registreringsForm" onsubmit="return validateRegistration()" action="register-process.php" method="POST"><br/>
				<input type="text" placeholder="Användarnamn" name="username" id="username"><br/>
				<input type="text" placeholder="E-postadress" name="email" id="email"><br/>
				<input type="password" placeholder="Lösenord" name="password" id="password"><br/><br/>
				<input type="submit" value="Submit" class="button">
			</form>
		</div>
	</body>
</html>