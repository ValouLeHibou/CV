<?php
require_once('layout/init.inc.php');
if(isset($_POST['send'])) {
    if(
        !empty($_POST['name'])
        && !empty($_POST['prenom'])
        && !empty($_POST['mail'])
        //&& ($_POST['password'] === $_POST['password2'])
    ) {
        $req = $pdo->prepare('INSERT INTO user2( user2_prenom, user2_nom, user2_mail, user2_password, user2_anniv, user2_photo)
                        VALUES ( :prenom, :nom, :mail, :password, :anniv, :photo )');
        $req->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
        $req->bindValue(':nom', $_POST['name'], PDO::PARAM_STR);
        $req->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
        $req->bindValue(':password', sha1($_POST['password']), PDO::PARAM_STR);
        $req->bindValue(':anniv', $_POST['anniv'], PDO::PARAM_INT);
        $req->bindValue(':photo', $_POST['photo'], PDO::PARAM_STR);
        $req->execute();
        header("location:account.php");
        

    } else {
        $msg = '<div class="alert alert-danger">Veuillez remplir TOUS les champs</div>';
    }
}
?>
<?php
	require_once('layout/header.inc.php');
?>
<main id="main_inscription">
	<section id="section_inscription">
		<div id='content_inscription'>
			<h1>Une communauté soudée</h1>
			<p>Inscrivez vous et rejoignez un groupe de personnes volontaires et désireuses d’apprendre</p>
		</div>
		<div id="content2_inscription">
			<form method="post" action="inscription.php">
				<div id="content3_inscription">
					<input type="text" name="name" placeholder="Nom">
					<input type="text" name="prenom" placeholder="Prenom">
				</div>
				<input type="email" name="mail" placeholder="Adresse mail" id="input_inscription"><br>
				<label for="naissance">Date de naissance</label><input type="date" name="anniv"><br>
				<input type="password" name="password" placeholder="Mot de passe" class="input_mdp">
				<input type="password" name="password2" placeholder="Confirmer mot de passe" class="input_mdp">
				<label for="photo">Choisis une photo</label>
				<input type="file" name="photo" id="mon_fichier" /><br>
				<input type="submit" value="Let's go !" name="send" class="bouton_inscription">
			</form>
		</div>
	</section>
</main>
<?php 
	require_once('layout/footer.inc.php');
?>