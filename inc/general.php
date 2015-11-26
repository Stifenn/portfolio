<?php 


	if (isset($_POST['send']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		updateName($pdo, $firstname, $lastname);

	}
 		$oldName = recupName($pdo);


 ?>

<form action="#" method="post" accept-charset="utf-8">
	<label for="firstname">Votre Prénom: </label>
	 <input type="text" name="firstname" value="<?php echo $oldName['firstname'] ?>" placeholder="Prénom">
	<label for="lastname">Votre Nom: </label>
	 <input type="text" name="lastname" value="<?php echo $oldName['lastname'] ?>" placeholder="Nom">
	 <input type="submit" name="send" value="Envoyer">
</form>