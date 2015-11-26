<?php
	
	require_once '../../inc/connexion.php';
	require_once '../../inc/functions.php';
	

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administration</title>
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<main>
		<nav>
			<ul>
				<li><a href="#">Administration</a></li>
				<li><a href="index.php?page=general" title="">Géneral</a></li>
				<li><a href="index.php?page=slider" title="">Slider</a></li>
				<li><a href="index.php?page=content" title="">Contenu de la Home page</a></li>
				<li><a href="index.php?page=portfolio" title="">Portfolio</a></li>
			</ul>
		</nav>
		<section>

		<?php  
			// on regarde sur quel type de page on se trouve
			if ( isset($_GET['page']) && !empty($_GET['page'])) {
				// on appelle la fonction get_page() qui récupère le type de la page
				$type_page = get_page();
				// on regarde si le fichier existe
				if (file_exists ('../../inc/'. $type_page .'.php' )) {
					// si le fichier existe on l'inclus
					include_once '../../inc/'. $type_page.'.php';
				} else { // si le fichier n'existe pas on va sur l'accueil
					include_once '../../inc/404.php';
				}
			} else {
				include_once '../../inc/general.php';
			}
		?>

		</section>
	</main>
</body>
</html>