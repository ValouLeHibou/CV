<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Athotz - Le reverse mentoring entre particuliers</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="style/home.css" />
	<link rel="shortcut icon" href="style/img/logonotextbleu_small.png">
	<meta name="description" content="Athotz est une plateforme intergénérationnelle d’échange de connaissance langagière contre savoir & savoir-faire.">
</head>
<body>
<header>
	<nav>
		<div>
			<div id="logo"><a href="index.php"><img src="style/img/logo_blanc.png" alt="logo_white" id='logo_white'></a></div>
			<div><a href="equipe.php" class='border_nav'>Concept</a></div>
			<div><hr></div>
			<div><a href="contact.php" class='border_nav'>Contact</a></div>
			<div><hr></div>
			<div><a href="cours.php" class='border_nav'>Cours</a></div>
			<div><hr></div>
			<div><a href="actu.php">Actualités</a></div>
			<div><a href="login2.php"><button class="button_nav">Connexion</button></a></div>
			<div><a href="inscription.php"><button class="button_nav">Inscription</button></a></div>
		</div>
		<?php
		if(isset($_SESSION['user2'])) {
	?>
	<div>
	<div>
		bonjour,  <?=$_SESSION['user2']['user2_prenom']; ?><br>
		<a href="logout2.php">Logout</a>
	</div>
</div>
	<?php } ?>
	</nav>
	<script src="/tarteaucitron/tarteaucitron.js"></script>

        <script>
        tarteaucitron.init({
            "hashtag": "#tarteaucitron", /* Ouverture automatique du panel avec le hashtag */
            "highPrivacy": false, /* désactiver le consentement implicite (en naviguant) ? */
            "orientation": "top", /* le bandeau doit être en haut (top) ou en bas (bottom) ? */
            "adblocker": false, /* Afficher un message si un adblocker est détecté */
            "showAlertSmall": true, /* afficher le petit bandeau en bas à droite ? */
            "cookieslist": true, /* Afficher la liste des cookies installés ? */
            "removeCredit": false /* supprimer le lien vers la source ? */
        });
        </script>
</header>
