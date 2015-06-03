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
		<form name="kommentarForm" onsubmit="validateComment()">
			<p><input type="text" name="userName" placeholder="Namn"></p>
			<p><input type="text" name="userMail" placeholder="E-postadress"></p>
			<p><input type="text" name="kommentarText" placeholder="Kommentar"></p>
			<p><input type="submit" value="Skicka!" class="button"></p>
		</form>
	</body>
</html>