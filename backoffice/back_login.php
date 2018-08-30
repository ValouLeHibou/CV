<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="CV" content="Bienvenue sur mon CV">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/> <!-- Responsive -->
		<title>Bienvenue sur mon CV</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen"/>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" type="text/css" href="../css/back.css">
		<link rel="icon" type="image/png" href="../img/icon/favicon.ico" />
	</head>
	<body id="back">
		<h2>Bienvenue dans le back office</h2>
		<form method="post" action="verif.php">
			<fieldset class="row">
				<legend>Connexion administrateur</legend>
					<div class="input-field col l12 m12 s12">
						<input id="login" name="login" type="text" class="validate" required>
						<label for="login">Login</label>
					</div>
					<div class="input-field col l12 m12 s12">
						<input id="password" name="password" type="password" class="validate" required>
						<label for="password">Password</label>
					</div>
					<div class="row">
						<input type="submit" name="post" value="Connexion" class="waves-effect waves-light btn">
					</div>
			</fieldset>
		</form>
		<?php
			if(isset($_GET["notif"])){
				if($_GET["notif"] == "bad_input"){
					echo "<span>Erreur : Identifiant ou mot de passe invalide(s).</span>";
				}
			}
		?>
		<br><a href="../index.php">Retour à l'Accueil</a>
	</body>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
</html>