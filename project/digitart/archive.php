<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Archives</title>
		<link href="Images/logo.png" rel="shortcut icon" >
		<link rel="stylesheet" type="text/css" href="CSS/archive.css" />
		<link rel="stylesheet" type="text/css" href="CSS/header.css" />		
	</head>

	<body>
		<?php
			include("tableau.php");
		?>
		
		<?php
			include("header.php");
		?>

		<div class="corps">
		<div class="test">Archives</div>
		<hr/>
		<table>
			<tr>
				<td><img alt="voiture" src="Images/voiture.jpg"></td>
				<td class="text">
					<div class="maj">PIX1851</div>
					<p>
						Jeune artiste contemporain. À travers ses tableaux, il souhaite transmettre un image de la société urbaine plus colorée. 
					</p>
				</td>
			</tr>
			<tr>
				<td><img alt="fleur" src="Images/fleur.jpg"></td>
				<td class="text">
					<div class="maj">NadineLisa</div>
					<p>
						Jeune artiste fan de nature et de couleurs faisant souvent penser à Rousseau.
					</p>
				</td>
			</tr>
			<tr>
				<td><img alt="color" src="Images/color.jpg"></td>
				<td class="text">
					<div class="maj">DEZALB</div>
					<p>
						Artiste confirmé exprimant son talent par ses mélanges de couleurs et d'éléments rendant ses tableaux uniques.
					</p>
				</td>
			</tr>
		</table>
		</div>
	</body>
</html>