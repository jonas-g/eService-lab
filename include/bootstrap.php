<?php 
	session_start();
	
	require 'models/db.php';

	function test_input($input)
	{
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}


	function unique_salt()
	{
		return substr(sha1(mt_rand()),0,22);
	}

?>