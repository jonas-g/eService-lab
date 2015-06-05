<?php
$sql = "SELECT quote.quote_text, quote.source, quote.year, user.username, user.email, quote.time FROM quote INNER JOIN user ON user.user_id=quote.user_id ORDER BY quote_id DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	$year = $year_adbc = "";

	if ($row["year"] < 0) {
		$year = abs($row["year"]);
		$year_adbc = "$year B.C.";
	} else {
		$year = $row["year"];
		$year_adbc = $year . ' A.D.';
	}

	echo '<div class="entry"><p>'.$row["quote_text"].'</p>';
	echo '<h3>' . $row["source"] . ' :::: ' . $year_adbc;
	echo '<h3>–posted by <a href="mailto://' . $row["email"].'">'.$row["username"].'</a> at '.$row["time"].'</h3></div>';
}

?>