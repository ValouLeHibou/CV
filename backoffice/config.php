<?php
try {
	ini_set('display_errors', 1);
	$dns = 'mysql:host=localhost;dbname=vguilbaud_php2A';//a changer
	$utilisateur = 'vguilbaud';//a changer
	$motDePasse = '6KMkwY8r9P';//a changer
	
	$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	
	$pdo = new PDO( $dns, $utilisateur, $motDePasse, $options );
}
catch ( Exception $e ) {
	die("Connexion à MySQL impossible : " .$e->getMessage());
}
?>