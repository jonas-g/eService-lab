<?php
$user = 'root';
$password = 'root';
$db = 'lab_db';
$host = 'localhost:8889';

$conn = mysqli_connect($host, $user, $password, $db) or die("Error " . mysqli_error($conn));

function db_connect(){
	$user = 'root';
	$password = 'root';
	$db = 'lab_db';
	$host = 'localhost:8889';
	
	$conn = mysqli_connect($host, $user, $password, $db) 
		or die("Error " . mysqli_error($conn));
	return $conn;
}

function db_query($query){
	$conn = db_connect();
	//return $conn->query($query);
	return mysqli_query($conn, $query); 
	//	or die("Query error: " . mysqli_error($conn));
}		

/**
* Database functions
*/
/*
class Database {
	
	public $conn;

	function __construct(){	
		$user = 'root';
		$password = 'root';
		$db = 'lab_db';
		$host = 'localhost:8889';
		
		$this->$conn = mysqli_connect($host, $user, $password, $db) ;
		if ($this->$conn->connect_error){
			$err_code = $mysqli->connect_errno;
			die("Error: ($err_code) $this->connection->connect_error");
		}
		//	or die("Error " . mysqli_error($conn));
		//return $conn;

	}

	public function query($sql){
		return $this->db->mysqli_query($conn, $sql)
			or die("Query error: " . $this->db->error;
	}
}
*/

?>