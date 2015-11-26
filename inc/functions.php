
<?php 
	//fonction qui insert le nom
	function insertName($pdo, $firstname, $lastname){

		$sql = 'INSERT INTO user (lastname, firstname) VALUES(:lastname, :firstname);';
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':lastname', $lastname);
		$stmt->bindValue(':firstname', $firstname);
		$stmt->execute();
	}
	// fonction qui met à jour le nom 
	function updateName($pdo, $firstname, $lastname){
		$sql = 'UPDATE user SET lastname = :lastname, firstname = :firstname WHERE id = 1' ;
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':lastname', $lastname);
		$stmt->bindValue(':firstname', $firstname);
		$stmt->execute();

	}
	//fonction qui récupere le nom 
	function recupName($pdo) {
		$sql = 'SELECT id, lastname, firstname FROM user' ;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();

		$users = $stmt->fetch();
		return $users;
	}


	// function qui renvoi le type de la page
	function get_page(){
		 return $_GET['page'];
	}
