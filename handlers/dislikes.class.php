<?php
	/* dislikes class
	 * Purpose: list all the user's dislikes.
	 */
	class dislikes {

		// This method select all the movies a user has disliked.
		public function get($id) {
			global $bdd;

			$userDislikes = $bdd->prepare('SELECT title, cover, genre FROM junction, movies WHERE junction.id_user = :id AND junction.id_movie = movies.id AND junction.dislikes = 1');
			$userDislikes->execute(array('id' => $id));

			$result = $userDislikes->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.
		}
	}
?>