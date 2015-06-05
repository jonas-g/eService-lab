<?php
$sql = "SELECT quote.quote_text, quote.source, quote.year, user.username, quote.time FROM quote INNER JOIN user ON user.user_id=quote.user_id ORDER BY quote_id DESC";
$result = mysqli_query($conn, $sql);



while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="entry"><p>'.$row["quote_text"].'</p>';
		echo '<h3>–posted by <a href="mailto://'.$row["epost"].'">'.$row["namn"].'</a></h3></div>';
	}

?>