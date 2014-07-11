<?php

	class watchlist {
		public function get($id) {
			global $bdd;

			$userWatchlist = $bdd->prepare('SELECT title, cover, genre FROM junction, movies WHERE junction.id_user = :id AND junction.id_movie = movies.id AND junction.watchlist = 1');
			$userWatchlist->execute(array('id' => $id));

			$result = $userWatchlist->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.
		}
	}
?>