<?php include 'session_start.php'; ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="CV" content="Bienvenue sur mon CV">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/> <!-- Responsive -->
		<title>Bienvenue sur le Back Office</title>
		<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen"/>
		<link rel="stylesheet" type="text/css" href="../css/back.css">
		<link rel="icon" type="image/png" href="../img/icon/favicon.ico" />
	</head>

	<body id="accueil">
		<header>
			<h1>Bienvenue <?= $_SESSION['pseudo']; ?></h1>
			<a href="deconnexion.php">Se déconnecter</a>
		</header>

		<main>
			<?php
			if(isset($_GET["notif"])){
				if($_GET["notif"] == "nok"){
					echo '<span style="color:#2FFF24;">Les changements ont bien été enregistrés</span>';
				}
			}
			?>
			
<!-- ################################## CHAMP HEADER ##################################### -->
			<section id="header">
				<h2>Section Header</h2>
				<?php
				$sql = "SELECT descr FROM header";
				$reponse = Database::getInstance()->request($sql);
				?>
					<form method="post" action="modify.php" class="col">
						<div>
							<textarea name="descr"><?= $reponse['descr']; ?></textarea>
						</div>
						<input type="submit" name="post" value="Enregistrer" class="waves-effect waves-light btn">
					</form>
			</section>

			<hr>

<!-- ################################## CHAMP EXPERIENCE ##################################### -->
			<section id="experience">
				<h2>Section Expérience</h2>
				<?php
				$sql = "SELECT id, title, explication, url_img FROM experience ORDER BY ordre_exp DESC";
				$reponse = Database::getInstance()->request($sql, false, true);
				?>

				<form method="post" action="modify.php" class="col" enctype="multipart/form-data">
				<?php foreach ($reponse as $display) : ?>

					<div class="switch" id="top_exp" >
						Supprimer Expérience ?
						<label for="delete" class="delete">
							Non
							<input type="checkbox" name="delete<?= $display['id']; ?>" id="delete">
							<span class="lever"></span>
							Oui
						</label>
					</div>

					<div>
						<input type="text" name="titre_exp<?= $display['id']; ?>" value="<?= $display['title']; ?>" required>
						<label for="titre_exp">Titre</label>
					</div>

					<div>
						<textarea name="explication<?= $display['id']; ?>"><?= $display['explication']; ?></textarea>
					</div>

					<label for='image'>Fichier image (.JPG, .PNG, .GIF)</label>
					<div><input type="file" name="image<?= $display['id']; ?>" id="image" /></div>

					<input type="hidden" name="id<?= $display['id']; ?>" value="<?= $display['id']; ?>">
					<input type="hidden" name="nombre" value="<?= $display['id']; ?>">

				<?php endforeach; ?>
					<input type="submit" name="post" value="Enregistrer" class="waves-effect waves-light btn">
				</form>

				<h3>Créer une nouvelle expérience</h3>
				<form method="post" action="modify.php" class="col" enctype="multipart/form-data">
					<div>
						<input type="text" id="new_exp" name="new_title" required>
						<label for="new_exp">Titre</label>
					</div>
					<div><textarea name="new_explication"></textarea></div>
					<label for='new_image'>Fichier image (.JPG, .PNG, .GIF)</label>
					<div><input type="file" name="new_image" id="new_image" /></div>
					<input type="submit" name="post" value="Enregistrer" class="waves-effect waves-light btn">
				</form>
			</section>
		</main>
	</body>
</html>