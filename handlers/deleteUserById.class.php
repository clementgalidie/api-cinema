<?php
	/* deleteUserById class
	 * Purpose: delete a user according to his ID.
	 */
	class deleteUserById {
		public function get($id) {
			global $bdd;

			$deleteUser = $bdd->prepare('DELETE FROM users WHERE id = :id');
			$deleteUser->execute(array('id' => $id));
			/*$result = $deleteUser->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($result, JSON_PRETTY_PRINT); // Output some json.*/
		}
	}
?>