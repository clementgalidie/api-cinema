<?php
	/* users class
	 * Purpose: list all the users.
	 */

	class users {
		// Method to display a list of all the users.
		public function get() {
			global $bdd;

			$allUsers = $bdd->prepare('SELECT * FROM users');
			$allUsers->execute();

			$result = $allUsers->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.
		}
	}
?>