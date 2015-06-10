<?php
require 'include/bootstrap.php';

$source_error = $year_error = $quote_error = "";
$source = $year = $quote = "";

/*
var_dump($_SERVER["REQUEST_METHOD"]);
echo "</br>";
var_dump($conn);
echo "</br>";
var_dump($_SESSION['current_user']);
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["quoteText"])) {
		$quote_error = "No quote entered. (Server-side error)";
		echo $quote_error;
	} else {
		$quote = mysqli_real_escape_string($conn, test_input($_POST["quoteText"]));
/*
		if (!preg_match("/^[a-zA-Z ]*$/", $quote)) {
			$source_error = "Bara bokstäver och mellanslag tillåtna i namnet. (Server-side error)";
			echo $source_error;
		}
*/
	}
	
	if (empty($_POST["quoteSource"])) {
		$source_error = "Source missing. (Server-side error)";
		echo $source_error;
	} else {
		$source = mysqli_real_escape_string($conn, test_input($_POST["quoteSource"]));
/*
		if (!preg_match("/^[a-zA-Z ]*$/", $source)) {
			$source_error = "Bara bokstäver och mellanslag tillåtna i namnet. (Server-side error)";
			echo $source_error;
		}
*/
	}
	
	if (empty($_POST["quoteYear"])) {
		$year_error = "Year of quotation missing. (Server-side error)";
		echo $year_error;
	} else {
		$year = mysqli_real_escape_string($conn, test_input($_POST["quoteYear"]));
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
/*
		if (!preg_match($regex, $email)) {
			$year_error = "Ogiltig e-postadress. (Server-side error)";
			echo $year_error;
		}
*/
	}
	
	if ($source_error == "" && $year_error == "" && $quote_error == "") {
		$current_user_id = $_SESSION['current_userid'];
		$sql = "INSERT INTO quote(source, year, quote_text, user_id) VALUES ('$source', '$year', '$quote', '$current_user_id')";
		//var_dump($sql);
/*
		if (!mysqli_query($conn, $sql)) {
			echo("Error description: " . mysqli_error($conn));
		}
		mysqli_close($conn);
*/
		$result = db_query($sql);

		if ($result) {
			echo "Quote added";
		} else  {
			echo "Quote was not saved";
		}
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="1; url=index.php">
	</head>
	<body></body>
</html>