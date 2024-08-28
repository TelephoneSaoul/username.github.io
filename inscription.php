<!DOCTYPE html>
<html>
   <head>
      <title> Téléphone Saoul </title>
      
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="Andika/Andika-webfont-example.css" type="text/css">
	  <link rel="icon" type="image/png" href="images/icon.png">
      <meta charset="utf-8">
      <meta name="keywords" content="Télépone Saoul, Art, Illustration, TS, Téléphone, Saoul, TéléphoneSaoul, Dessin, dessin, collaboration, artistes, inscription">
      
   </head>
   <body>

		<header>
			<table>
				<tr>
					<td class="centre">
					<h1>Téléphone Saoul</h1>
					<img class="etal-picture" src="images/banniere.jpg" alt="Forêt avec des étagères à livre creusées dans les troncs d'arbres." />
					</td>					
					
					
				</tr>
			</table>
		<P>
			
			<nav>
				<a class="nav" href=index.html>Accueil</a>
				<a class="nav" href=reglement.html>Règlement</a>
				<a class="nav" href=inscription.html>2024-2025:Inscriptions</a>
				<a class="nav" href=An2224.html>2022-2024</a>
				<a class="nav" href=An2122.html>2021-2022</a>
				<a class="nav" href=An2021.html>2020-2021</a>
				<a class="nav" href=An1920.html>2019-2020</a>
				<a class="nav" href=An1819.html>2018-2019</a>
			</nav>
		</P>
		</header>
		
		
		
		
		<main>
			<h1 class='centre' >Inscriptions édition 2024-2025</h1>
			<div >
				Les inscriptions pour l'édition 2024-2025 ouvrent bientôt. N'oubliez pas de relire le <a href=reglement.html>règlement</a> avant de vous inscrire.
			</div>
			
			<div>
				<?php
				$message= $_POST['name'] . '<br>' .
							$_POST['regle'] . '<br> Comment me contacter :' . 
							$_POST['contact'] . '<br> Comment me créditer :' . 
							$_POST['credit'] . '<br> Autre ? :' . 
							$_POST['period'];
				$retour = mail('telephonesaoul@gmail.com', 'Inscription au téléphone Saoul', $message, '');
				if ($retour)
					echo '<p>Votre inscription a bien été envoyé.</p>';
				?>
			</div>
			
		</main>
		   
   </body>
</html>