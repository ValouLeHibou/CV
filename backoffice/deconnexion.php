<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="CV" content="Bienvenue sur mon CV">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/> <!-- Responsive -->
		<title>Deconnexion réussie</title>
		<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen"/>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" type="text/css" href="../css/back.css">
		<link rel="icon" type="image/png" href="../img/icon/favicon.ico" />
	</head>
	<body id="deconnexion">
		<h1>Vous avez bien été déconnecté !</h1>
		<h2>Redirection ...</h2>
		<?php
		header( "Refresh:3; url=back_login.php");
		?>
	</body>
</html>