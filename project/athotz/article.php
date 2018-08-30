<?php
	require_once('layout/header.inc.php');
	require_once('layout/init.inc.php');  

        try {
            $req=$pdo->query("SELECT * FROM posts, user, category
                                       WHERE post_author=ID
                                       AND post_category=cat_id
                                       AND post_ID = " . $_GET["id"]);
                        
            $req->setFetchMode(PDO ::FETCH_ASSOC); 


            $value = $req->fetch();
            
            

            ?>

<main>
	<div id="image_header"></div>	
	<section id="section_article">
		<div>
			<h1><?= $value["post_title"]; ?></h1>
		</div>
		<div id="para_article">
			<p><?= $value["post_content"]; ?></p>
			<p>Rédigé par <?= $value["user_name"]; ?></p>
			<p>Posté le <?= $value["post_date"]; ?></p>
			<p><i>Classé dans la catégorie "<?= $value["cat_descr"]; ?>"</i></p>
			
		</div>
		<?php
			$req->closeCursor();
		}
		catch(exception $e) {
			die("erreur MySQL : ".$e->getMessage());
		}
		?>
		<div>
			<a href="actu.php">retourner à la liste d'articles</a>
		</div>
	</section>
</main>
<?php
	require_once('layout/footer.inc.php');
?>