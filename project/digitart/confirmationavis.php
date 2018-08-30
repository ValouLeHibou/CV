<!doctype html>
<html>
<head>
<title>Confirmation</title>

<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">

	<link href="Images/logo.png" rel="shortcut icon" >
<link rel="stylesheet" type="text/css" href="CSS/confirmationavis.css" />	
<link rel="stylesheet" type="text/css" href="CSS/header.css" />
<link rel="stylesheet" type="text/css" href="CSS/bandeautableau.css" />	

</head>

<body>
	
		<?php
			include("header.php");
		?>
	
	<div class="boutons">
	
		<p>Merci pour votre commentaire !</p>
		
		<form method="post" action="avis.php">
		
				<input id="accueil" type="submit" name="valider" value="Retourner sur la page Avis">
			
		</form>	
		
		<form method="post" action="index.php">
		
				<input id="avis" type="submit" name="valider" value="Retourner sur l'accueil">
			
		</form>	
		
	</div>
	
			<?php
			include("bandeautableau.php");
		?>
		
</body>

</html>