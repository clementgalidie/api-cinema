<?php
	/* deleteMoviesById class
	 * Purpose: delete a movie according to his ID.
	 */
	class deleteMoviesById {
		public function get($id) {
			global $bdd;

			$deleteMoviesById = $bdd->prepare('DELETE FROM movies WHERE id = :id');
			$deleteMoviesById->execute(array('id' => $id));
			/*$result = $deleteUser->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.*/
		}
	}
?>