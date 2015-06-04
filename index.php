<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kommentarsfält</title>
		<link rel="stylesheet" href="assets/css/main.css">
		<script src="assets/js/main.js"></script>
	</head>
	<body>
		<h1>Kommentarsfält</h1>
		<form name="kommentarForm" onsubmit="return validateComment()" action="assets/db.php" method="POST">
			<input type="text" name="userName" placeholder="Namn">
			<input type="text" name="userMail" placeholder="E-postadress">
			<input type="text" name="kommentarText" placeholder="Kommentar">
			<input type="submit" value="Skicka!" class="button">
			<?php
				// $errors = array();
				// if ($_SERVER["REQUEST METHOD"] == "POST") {
				// 	if (0 === preg_match("/\S+/", $_POST['userName'])) {
				// 		$errors['userName'] = "Namn ej inmatat. (PHP check)";
				// 	}

				// 	if (0 === preg_match("/.+@.+\..+/", $_POST['userMail'])) {
				// 		$errors['userMail'] = "Felaktig e-postadress. (PHP check)";
				// 	}

				// 	if (0 === count($errors)) {
				// 		$namn = mysql_real_escape_string($_POST['userName']);
				// 		$epost = mysql_real_escape_string($_POST['userMail']);
				// 	}
				// }
			?>
		</form>
		
		<?php
			require 'assets/kommentarer.php';
		?>
	</body>
</html>