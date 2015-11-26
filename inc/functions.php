<?php 

	function insertName($pdo, $firstname, $lastname){

		$sql = 'INSERT INTO users (lastname, firstname) VALUES(:lastname, :firstname);';
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':lastname', $lastname);
		$stmt->bindValue(':firstname', $firstname);
		$stmt->execute();
	}

	function updateName($pdo, $id, $firstname, $lastname){
		$sql = 'UPDATE users SET lastname = :lastname, firstname = :firstname WHERE id = :id' ;
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':lastname', $lastname);
		$stmt->bindValue(':firstname', $firstname);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

	}

	function recupName($pdo, $firstname, $lastname) {
		$sql = 'SELECT lastname, firstname FROM Users WHERE lastname = :lastname AND firstname = :firstname LIMIT 1' ;
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':lastname', $lastname);
		$stmt->bindValue(':firstname', $firstname);
		$stmt->execute();

		$users = $stmt->fetch(PDO::FETCH_ASSOC);
		return $users;
	}


