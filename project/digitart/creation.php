<!DOCTYPE html>
<html>
<head>
<title>Publier un Avis</title>

<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
	
<link href="Images/5.gif" rel="shortcut icon" >
<link rel="stylesheet" type="text/css" href="CSS/creationavis.css" />
<link rel="stylesheet" type="text/css" href="CSS/header.css" />
<link rel="stylesheet" type="text/css" href="CSS/bandeautableau.css" />	
	
</head>
	
	<body>
	
		<?php
			include("header.php");
		?>

	
<!---------------------------------------------------->
		<div class="main"> 
		
			<form method="post" action="confirmationavis.php">
			
				<h1>Publier un Avis</h1><!--

			 --><div id="col1"> <!-- Nom, Prenom, Mail, Titre, Note -->
						
		<!---------------------------------------------------->
					
					<input type="text" id="nom" name="nom" placeholder=" Nom" required />
			
		<!---------------------------------------------------->		
					
					<img src="Images/head.png">
				
		<!---------------------------------------------------->	
					
					<input type="text" id="prenom" name="prenom" placeholder=" Prenom" required/>
					
		<!---------------------------------------------------->		
					
					<img src="Images/padlock.png">
					
		<!---------------------------------------------------->		
					
					<input type="email" id="mail" name="mail" placeholder=" Adresse Mail" required />
			
		<!---------------------------------------------------->		
					
					<img src="Images/email.png">
					
		<!---------------------------------------------------->		
				<br/><br/>
				
					<select name="sujet" id="sujet" required>
						<option value="" disabled selected>Sujet</option>
						<option value="1">Site</option>
						<option value="2">Oeuvre</option>
						<option value="3">Autre</option>
					</select>
				
				<br/><br/>
		<!---------------------------------------------------->
		
					<select name="note" id="note" required>
						<option value="" disabled selected>Note</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					
		<!---------------------------------------------------->	
		
					
				</div>
				
	<!---------------------------------------------------->	

	<!---------------------------------------------------->	
				
				<div id="col2"> <!-- text area -->
			 
		<!---------------------------------------------------->	
			 
					<textarea name="message" id="message" placeholder="Votre message"></textarea>
					
		<!---------------------------------------------------->	
					
				</div>
				
	<!---------------------------------------------------->	
			
	<!---------------------------------------------------->		
		
				<div class="publier"> <!-- Bouton publier -->
			 
		<!---------------------------------------------------->	
			 
					<input type="submit" name="Publier" value="Publier">
					
		<!---------------------------------------------------->	
					
				</div>
				
	<!---------------------------------------------------->	
				
			</form>
			
		</div>
		
			
		<?php
			include("bandeautableau.php");
		?>
		
<!---------------------------------------------------->	
		
	</body>
	
</html>