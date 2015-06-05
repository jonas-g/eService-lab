<div class="entry"><div id="quote_form">
		
	<form name="quoteForm" onsubmit="return validateComment()" action="posts-create.php" method="POST">
		<textarea type="text" name="quoteText" placeholder="Enter your quote here" width="80%" height="100px"></textarea></br>
		<input type="text" name="quoteSource" placeholder="Source">   
		<input type="text" name="quoteYear" placeholder="Year">   
		<input type="submit" value="Quote" class="button"></br>
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
		
</div></div>