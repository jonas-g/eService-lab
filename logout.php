<?php
	require 'include/bootstrap.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="1; url=index.php">
	</head>
	<body>
	
	<?php
		// remove all session variables
		session_unset(); 
		
		// destroy the session 
		session_destroy(); 
	?>
	
	</body>
</html>