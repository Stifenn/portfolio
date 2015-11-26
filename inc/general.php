<?php 
include "connexion.php";
include "functions.php";

	if (isset($_POST['send']) && !empty($_POST['name'])) {
		$name = $_POST['name'];
		updateName($pdo, $id, $firstname, $lastname)

	}



 ?>

<form action="#" method="post" accept-charset="utf-8">
	<label for="firstname">Votre Prénom: </label>
	 <input type="text" name="firstname" value="" placeholder="Prénom">
	<label for="lastname">Votre Nom: </label>
	 <input type="text" name="lastname" value="" placeholder="Nom">
	 <input type="submit" name="send" value="">
</form>