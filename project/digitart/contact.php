<!DOCTYPE html>
<html>
<head>
	<title>Contactez-nous</title>
	<meta charset="utf-8">
	<link href="Images/logo.png" rel="shortcut icon" >
	<link rel="stylesheet" type="text/css" href="CSS/contact.css">
	<link rel="stylesheet" type="text/css" href="CSS/header.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<?php include("header.php");?>
<?php include("tableau.php");?>
!---------------------------------------------------->
		<div class="main"> 
		
			<form method="post" action="confirmationavis.php">
			
				<h1>Contacter Digit'Art</h1><!--

			 --><div id="col1"> <!-- Nom, Prenom, Mail, Titre, Note -->
						
		
					
					<input type="text" id="nom" name="nom" placeholder=" Nom" required />
			
				
					
					<img src="Images/head.png">
				
			
					
					<input type="text" id="prenom" name="prenom" placeholder=" Prenom" required/>
					
				
					
					<img src="Images/padlock.png">
					
				
					
					<input type="email" id="mail" name="mail" placeholder=" Adresse Mail" required />
			
				
					
					<img src="Images/email.png">


					<input type="telephone" name="telephone" placeholder="Téléphone" required/>


					<i class="material-icons tel">phone</i>
					
				
				<br/><br/>
				
 
				</div>
				
	
				
				<div id="col2"> <!-- text area -->
			 
			
			 
					<textarea name="message" id="message" placeholder="Votre message"></textarea>
					
			
					
				</div>
				
		
			
			
		
				<div class="publier"> <!-- Bouton publier -->
			 
			
			 
					<input type="submit" name="Envoyer" value="Envoyer">
					

					
				</div>
</form>
				<div class="localisationdiv">
				<h2>Notre localisation</h2>

				
				<div class="localisation"><i class="material-icons">location_on</i> 28 place de la Bourse,<br>
				75002, Paris</div>

				<div class="telephone"><i class="material-icons">phone</i> 01.01.01.01.01</div>
				<br />
				<div class="mail"><i class="material-icons">mail_outline</i> contact@digitart.com</div>
				</div>
				
			
		</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.426291724286!2d2.3392181156299094!3d48.86914947928848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c8ab00dff%3A0xc8bb3a66d8ae2daa!2s28+Place+de+la+Bourse%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1487509965189" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>
</html>