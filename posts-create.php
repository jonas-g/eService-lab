<?php
require 'include/bootstrap.php';

// $namn = $_POST["userName"];
// $epost = $_POST["userMail"];
$namn_error, $epost_error = "";
$namn, $epost, $text = "";

$text = $_POST["kommentarText"];




if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["namn"])) {
		$namn_error = "Namn saknas. (Server-side error)";
		echo $namn_error;
	} else {
		$namn = mysqli_real_escape_string($conn, test_input($_POST["namn"]));
		if (!preg_match("/^[a-zA-Z ]*$/", $namn)) {
			$namn_error = "Bara bokstäver och mellanslag tillåtna i namnet. (Server-side error)";
			echo $namn_error;
		}
	}
	if (empty($_POST["epost"])) {
		$epost_error = "E-postadress saknas. (Server-side error)";
		echo $epost_error;
	} else {
		$epost = mysqli_real_escape_string($conn, test_input($_POST["epost"]));
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
		if (!preg_match($regex, $email)) {
			$epost_error = "Ogiltig e-postadress. (Server-side error)";
			echo $epost_error;
		}
	}
	
	if ($namn_error == "" && $epost_error == "") {
		$sql = "INSERT INTO kommentar(namn, epost, text) VALUES ('$namn', '$epost', '$text')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "Kommentar infogad";
		} else  {
			echo "Kommentaren sparades inte i databasen";
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