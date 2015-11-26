<?php 


	// on récupère les images du slide d'après l'id_user
	$tab_image = get_image_slider($pdo, $id_user);

	// Afficher des images enregistrées en DB avec un button 
	foreach ($tab_image as $currentImage) {
			echo '<img src="../..img/'.$currentImage['chemin'].'" alt="'.$currentImage['label'].'" /> <button class="delete" type="button">X</button>';
		}	


?>
