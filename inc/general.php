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
<?php
	// J'ai recu des données de formulaire
	if(isset($_POST['send-file'])) {

		// Vérifier si le téléchargement du fichier n'a pas été interrompu
		if ($_FILES['my-file']['error'] != UPLOAD_ERR_OK) {
			echo 'Erreur lors du téléchargement.';
		} else {
			// Objet FileInfo
			$finfo = new finfo(FILEINFO_MIME_TYPE);

			// Récupération du Mime
			$mimeType = $finfo->file($_FILES['my-file']['tmp_name']);

			$extFoundInArray = array_search(
		        $mimeType,
		        array(
		            'jpg' => 'image/jpeg',
		            'png' => 'image/png',
		            'gif' => 'image/gif',
		        )
		    );
		    if ($extFoundInArray === false) {
		    	echo 'Le fichier n\'est pas une image';
		    } else {
			    // Renommer nom du fichier
			    $path = '../img/avatar' . '.' . $extFoundInArray;
				$moved = move_uploaded_file($_FILES['my-file']['tmp_name'], $path);
				if(!$moved) {
					echo 'Erreur lors de l\'enregistrement';
				}
			}
		}
	}

?>


	<!-- CECI EST UN FORMULAIRE POUR UPLOAD DES AVATARS MAIS LA TAILLE SERA MODIFIER EN CSS -->
<form enctype="multipart/form-data" action="#" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
	Sélectionner le fichier : <input name="my-file" type="file" />
	<input type="submit" name="send-file" value="Envoyer le fichier" />
	<?php echo "<img src=".$path." alt=\"avatar\" />"; ?>
</form>


