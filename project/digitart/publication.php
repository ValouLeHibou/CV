<!DOCTYPE html>
<html>
<head>
<title>Demande d'affichage</title>

<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
	
<link href="Images/logoonglet.png" rel="shortcut icon" >
<link rel="stylesheet" type="text/css" href="CSS/publication.css" />
<link rel="stylesheet" type="text/css" href="CSS/header.css" />
	<body>
	
		<?php
			include("header.php");
		?>
		
		<?php
			include("tableau.php");
		?>
		
		
		<div class="main"> 
			<form method="post" action="confirmationpublication.php">
				<h1>Demande d'affichage</h1><!--

			 --><div id="col1"> <!-- Nom, Prenom, Nom de l'oeuvre -->
					<input type="text" id="nom" name="nom" placeholder="Nom" required />
					<img src="Images/head.png">
					<input type="text" id="prenom" name="prenom" placeholder="Prenom" required/>
					<img src="Images/padlock.png">
					<input type="text" id="nom_oeuvre" name="nom_oeuvre" placeholder="Nom de l'oeuvre" required /><br/>
					<span>Joignez le fichier de l'oeuvre</span> <!-- N'est pas affiché, sert à aligner les div -->
				</div><!--

			 --><div id="col2"> <!-- Date d'apparition, date de parution, oeuvre -->
					<input type="text" id="apparition" name="apparition" placeholder="Nom du peintre" required />
					
					<input type="text" id="parution" name="parution" placeholder="Mouvement" required/>
					<input type="file" id="oeuvre" name="oeuvre" placeholder="Oeuvre" required/><br/>
					<span class="fichier">Joignez le fichier de l'oeuvre</span>
				</div><!--
			
			 --><div class="publier"> <!-- Bouton publier -->
					<input type="submit" name="Publier" value="Publier">
				</div>
			</form>
		</div>
	</body>
</html>