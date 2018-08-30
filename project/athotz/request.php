<?php
	require_once('layout/init.inc.php');

$pseudo = htmlspecialchars($_POST[pseudo]);
$message = htmlspecialchars($_POST[message]);

if ($_POST) {
	try {
		$query = "INSERT INTO tchat(pseudo, message, date_heure)
				VALUES ('$pseudo', '$message', NOW() )";
		$req = $pdo->query ( $query );
		$req->closeCursor ();
	} catch ( Exception $e ) {
		die ( "Erreur MySQL : " . $e->getMessage () );
	}
}

header('Location: http://http://psalesse.eemi.tech/athotz/index.php');
?>
