<?php
	header('content-type: application/json; charset=utf-8'); // Set utf-8.
	require 'toro.php';
	require 'includes/database.php'; // Connection to the database.

	// Function to load each class.
	function loadClass($class) {
		require 'handlers/' . $class . '.class.php';
	}

	// Register loadClass function with the spl provided __autoload stack.
	spl_autoload_register('loadClass');

	// Defined HTTP errors.
	ToroHook::add('400', function() {
		echo 'Bad Request';
	});
	ToroHook::add('401', function() {
		echo 'Unauthorized';
	});
	ToroHook::add('403', function() {
		echo 'Forbidden';
	});
	ToroHook::add('404', function() {
		echo 'Not Found.';
	});

	// Defined server error.
	ToroHook::add('500', function() {
		echo '500 Internal Server Error';
	});

	// Defined routes.
	Toro::serve(array(
		'/v1/users/'          => 'users',
		'/v1/users/:number/'  => 'userId',
		'/v1/movies/'         => 'movies',
		'/v1/movies/:number/' => 'movieId'
		));
?>