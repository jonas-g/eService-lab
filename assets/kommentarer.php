<?php
$user = 'root';
$password = 'root';
$db = 'lab_db';
$host = 'localhost:8889';

$conn = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT namn, epost, text FROM kommentar ORDER BY kommentar_id DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
		echo '<h3><a href="mailto://'.$row["epost"].'">'.$row["namn"].'</a></h3>';
		echo '<p>'.$row["text"].'</p>';
	}

?>