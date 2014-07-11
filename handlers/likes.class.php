<?php
	/* Likes class
	 * Purpose: list all the user's likes.
	 */
	class likes {

		// This method select all the movies a user has liked.
		public function get($id) {
			global $bdd;

			$userLikes = $bdd->prepare('SELECT title, cover, genre FROM junction, movies WHERE junction.id_user = :id AND junction.id_movie = movies.id');
			$userLikes->execute(array('id' => $id));

			$result = $userLikes->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.
		}
	}
?>