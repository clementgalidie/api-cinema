<?php
	header('content-type: application/json; charset=utf-8'); // Set utf-8.
	require 'toro.php';
	require 'includes/database.php';
	require 'handlers/users.php';

	// Defined routes.
	Toro::serve(array(
		'/v1/users/' => 'users'
		));
?>