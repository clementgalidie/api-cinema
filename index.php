<?php
	header('content-type: application/json; charset=utf-8'); // Set utf-8.
	require 'toro.php';
	require 'includes/database.php';

	// Function to load each class.
	function loadClass($class) {
		require 'handlers/' . $class . '.class.php';
	}

	// Register loadClass function with the spl provided __autoload stack.
	spl_autoload_register('loadClass');

	// Defined routes.
	Toro::serve(array(
		'/v1/users/'                   => 'users',
		'/v1/users/:number/'           => 'userById',
		'/v1/users/deleting/:number/'  => 'deleteUserById',
		'/v1/movies/'                  => 'movies',
		'/v1/movies/:number/'          => 'moviesById',
		'/v1/movies/deleting/:number/' => 'deleteMoviesById'
		));
?>