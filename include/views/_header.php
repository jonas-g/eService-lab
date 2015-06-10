<?php
/*
	if(!isset($_SESSION)) {
		session_start();
	};
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Loggbok</title>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css">
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="assets/js/main.js" charset="utf-8" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="title_bar">
					<h1 id="main_title"><a href="index.php">Book of Quotes</a></h1>
				</div>
				<?php
					if (!isset($_SESSION['current_user'])) {
						echo '<div id="menu">';
							echo '<ul>';
								echo '<li id="login"><a href="#">Logga in</a></li>';
								echo '<li id="register"><a href="register.php">Registrera</a></li>';
							echo '</ul>';
						echo '</div>';
					};
					if (isset($_SESSION['current_user'])) {
						echo '<div id="menu">';
							echo '<ul>';
								echo '<li>Inloggad som '.$_SESSION['current_username'].'</li>';
								echo '<li id="logout"><a href="logout.php">Logga ut</a></li>';
							echo '</ul>';
						echo '</div>';
					};
					
					require 'include/views/_login_box.php';
				?>
			</div>
			<div id="content">
			