<?php
$user = 'root';
$password = 'root';
$db = 'lab_db';
$host = 'localhost:8889';

$conn = mysqli_connect($host, $user, $password, $db);

$namn = $_POST["userName"];
$epost = $_POST["userMail"];
$text = $_POST["kommentarText"];

$sql = "INSERT INTO kommentar(namn, epost, text) VALUES ('$namn', '$epost', '$text')";
$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Kommentar infogad";
} else  {
	echo "Kommentaren sparades inte i databasen";
}

?>