<?php
	/* userById class
	 * Purpose: display a user according to his ID.
	 */
	class userById {
		// Method to display a user according to his ID.
		public function get($id) {
			global $bdd;

			$userById = $bdd->prepare('SELECT * FROM users WHERE id = :id');
			$userById->execute(array('id' => $id));
			$result = $userById->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.

		}
	}
?>