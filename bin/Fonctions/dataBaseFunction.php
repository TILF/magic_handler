<?php

	/**
	 * Renvoie le nombre de user avec un identifiant spécifié
	 * @param   STRING $identifiant id saisis dans le formulaire d'inscription
	 */
	function getUserByIdentifiant($identifiant){
		$sql = "SELECT * FROM User WHERE identifiant LIKE " . $identifiant;

		return 1;
	}

	/**
	 * Renvoyer la ligne d'une personne par son identfiant et son mdp
	 * Nécéssaire à la connexion. 
	 * Si renvoie 1 ligne, la personne existe et on la connecte
	 * Sinon Faud id ou mdp
	 */
	function connectByIdPass($identifiant, $password){
		$sql = "SELECT identifiant, password FROM User WHERE identifiant, password LIKE " . $identifiant, $password;

		if (return 1) {
			connexion2();

		else {
			echo "Mauvais identifiant ou mot de passe !";
		}
	}

	/**
	 * renvoie l'identifiant de la personne corespondant au numéro d'id
	 * @param  [type] $id [description]
	 */
	function getidentifiantByID($id){
		$sql = "SELECT identifiant FROM User WHERE id LIKE " . $id;

		return 1;
	}

	/**
	 * Toutes les informations de l'id
	 * @return [type] [description]
	 */
	function getInfosById($id){
		$sql = "SELECT * FROM User WHERE id LIKE " . $id;

		return 1;
	}

	
?>