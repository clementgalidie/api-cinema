<?php
	
	class watched {
		public function get($id) {
			global $bdd;

			$userWatched = $bdd->prepare('SELECT title, cover, genre FROM junction, movies WHERE junction.id_user = :id AND junction.id_movie = movies.id AND junction.watched = 1');
			$userWatched->execute(array('id' => $id));

			$result = $userWatched->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.
		}
	}
?>