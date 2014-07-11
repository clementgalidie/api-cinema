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
		echo json_encode('Bad Request');
	});
	ToroHook::add('401', function() {
		echo json_encode('Unauthorized');
	});
	ToroHook::add('403', function() {
		echo json_encode('Forbidden');
	});
	ToroHook::add('404', function() {
		echo json_encode('Page not found');
	});

	// Defined server error.
	ToroHook::add('500', function() {
		echo json_encode('500 Internal Server Error');
	});

	// Defined routes.
	Toro::serve(array(
		'/v1/users'                      => 'users',
		'/v1/users/:number'              => 'userId',
		'/v1/movies'                     => 'movies',
		'/v1/movies/:number'             => 'movieId',
		'/v1/users/:number/likes'        => 'likes',
		'/v1/users/:number/dislikes'     => 'dislikes',
		'/v1/users/:number/watched'      => 'watched',
		'/v1/users/:number/watchlist'    => 'watchlist'
		));
?>