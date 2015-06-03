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
		<form name="kommentarForm" action="assets/db.php" method="POST" onsubmit="validateComment()">
			<input type="text" name="userName" placeholder="Namn">
			<input type="text" name="userMail" placeholder="E-postadress">
			<input type="text" name="kommentarText" placeholder="Kommentar">
			<input type="submit" value="Skicka!" class="button">
		</form>
		
		<?php
			require 'assets/kommentarer.php';
		?>
	</body>
</html>