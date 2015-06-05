<?php 
	require 'include/bootstrap.php';
	require 'include/views/_header.php';
?>
<!DOCTYPE html>

		<form name="kommentarForm" onsubmit="return validateComment()" action="posts-create.php" method="POST">
			<input type="text" name="userName" placeholder="Namn"></br>
			<input type="text" name="userMail" placeholder="E-postadress"></br>
			<input type="text" name="kommentarText" placeholder="Kommentar"></br>
			<input type="submit" value="Skicka!" class="button"></br>
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
	require 'posts.php';
	require 'include/views/_footer.php';
?>