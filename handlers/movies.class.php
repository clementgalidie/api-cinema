<?php

	class movies {
		public function get() {
			global $bdd;

			$allMovies = $bdd->query('SELECT * FROM movies');
			$allMovies->execute();

			$result = $allMovies->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.
		}
	}
?>