<?php 

	$id_user = 1;
	// on récupère les images du slide d'après l'id_user
	$tab_image = get_image_slider($pdo, $id_user);

	// Afficher des images enregistrées en DB avec un button de suppression
	foreach ($tab_image as $currentImage) {
			echo '<img src="../../img/'.$currentImage['chemin'].'" alt="'.$currentImage['label'].'" width="250px" height="250px" /> <button class="delete" type="button">Supprimer</button>';
		}	

?>

	<img src="" alt="+" width="250px" height="250px" />

