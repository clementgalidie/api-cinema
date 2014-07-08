<?php
	/* moviesById class
	 * Purpose: display a movie according to his ID.
	 */
	class moviesById {
		// Method to display a movie according to his ID.
		public function get($id) {
			global $bdd;

			$moviesById = $bdd->prepare('SELECT * FROM movies WHERE id = :id');
			$moviesById->execute(array('id' => $id));
			$result = $moviesById->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.

		}
	}
?>