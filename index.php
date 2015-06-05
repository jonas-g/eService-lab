<?php 
	require 'include/bootstrap.php';
	require 'include/views/_header.php';

	if (isset($_SESSION['current_user'])) {
		require 'include/views/_post_form.php';
	}

	require 'posts.php';
	require 'include/views/_footer.php';
?>