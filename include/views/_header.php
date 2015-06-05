<?php
	if(!isset($_SESSION)) {
		session_start();
	};
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Loggbok</title>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css">
		<script src="assets/js/main.js" charset="utf-8" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="title_bar">
					<h1 id="main_title"><a href="index.php">Loggbok</a></h1>
				</div>
				<?php
					if (!isset($_SESSION['current_user'])) {
						echo '<div id="menu">';
							echo '<p><a href="login.php">Logga in</a></p>';
							echo '<p><a href="register.php">Registrera</a></p>';
						echo '</div>';
					};
					if (isset($_SESSION['current_user'])) {
						echo '<div id="menu">';
							echo '<p>Inloggad som '.$_SESSION['current_username'].'</p>';
							echo '<p><a href="logout.php">Logga ut</a></p>';
						echo '</div>';
					};
				?>
			</div>
			