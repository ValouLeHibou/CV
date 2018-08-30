<?php
include 'session_start.php';

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);

$sql = "SELECT login, password FROM admin";
$reponse = Database::getInstance()->request($sql);
if ($login === $reponse['login'] && $password === $reponse['password']) {
	$_SESSION['pseudo'] = $login;
	header('Location: accueil.php');
	exit();
}

session_destroy();
sleep(1); // Une pause de 1 sec, ralenti les hack par la force brute
header('Location: back_login.php?notif=bad_input');

?>
