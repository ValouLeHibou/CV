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
	<body>
		<?php
		//Modification HEADER
		if (isset($_POST['descr']))
		{
			$descr = $_POST['descr'];
			$sql = "UPDATE header SET descr=:descr";
			$fields = ["descr" => $descr];
			$reponse = Database::getInstance()->request($sql, $fields, true);
			header('Location: accueil.php?notif=nok');
		}

		var_dump($_POST);
		//Modification EXPERIENCE
// 		if (isset($_POST['nombre'])) { //Detecte quel formulaire est utilisé
// 			for ($i = 0; $i < $_POST['nombre'] + 1; $i++) { // $i S'incrémentin en fonction du nombre de champs
// 				if (isset($_POST['id'. $i .''])) { // En cas d'id inexistant, la boucle saute cette id (ex: id=1, id=2, id=4)
// 					$id = $_POST['id'. $i .''];
// 					$title = $_POST['titre_exp'. $i .''];
// 					$explication = $_POST['explication'. $i .''];

// 					// Déplacer image : error === 0 -> $_files contient bien une image
// 					if ($_FILES['image'. $i .'']['error'] === 0) {
// 						$image = $_FILES['image'. $i .'']['tmp_name']; //chemin de l'emplacement temporaire
// 						$name = $_FILES['image'. $i .'']['name']; //nom de l'image
// 						$uploads_dir = '../img/icon/'.$name; //Chemin où j'envoie l'image depuis mon dossier actuel
// 						$way = 'img/icon/'.$name; //chemin à empreinter depuis la racine pour atteindre l'image

// 						move_uploaded_file($image, $uploads_dir);
// 						$sql = "UPDATE experience
// 								SET url_img=:url_img
// 								WHERE id=:id";
// 						$fields = ['url_img' => $way, 'id' => $id];
// 						$reponse = Database::getInstance()->request($sql, $fields);
// 					}
// 					$sql = "UPDATE experience 
// 							SET title=:title, explication=:explication 
// 							WHERE id=:id";
// 					$fields = ['title' => $title, 'explication' => $explication, 'id' => $id];
// 					$reponse = Database::getInstance()->request($sql, $fields);
// 					header('Location: accueil.php?notif=nok');
// 				}
// 			}
// 		}

		//Ajout EXPERIENCE
		if (isset($_POST['new_title'])) {
			$image = $_FILES['new_image']['tmp_name'];
			$name = $_FILES['new_image']['name'];
			$uploads_dir = '../img/icon/'.$name; //Chemin où j'envoie l'image depuis mon dossier actuel
			$way = 'img/icon/'.$name; //chemin à empreinter depuis la racine pour atteindre l'image

			move_uploaded_file($image, $uploads_dir);
			$sql = "INSERT INTO experience(id, title, explication, url_img, ordre_exp)
					VALUES (NULL, :new_title, :new_explication, :new_image, 1)";
			$fields = 
			[
				'new_title' => $_POST['new_title'], 
				'new_explication' => $_POST['new_explication'],
				'new_image' => $way,
			];
			$reponse = Database::getInstance()->request($sql, $fields);
			header('Location: accueil.php?notif=nok');
		}
		?>
	</body>
</html>