<?php
	require_once('layout/header.inc.php');
	require_once('layout/init.inc.php');
?> 
<main id="main_actu"> 
	<section id="section1_actu">
	
	<h2>A la Une</h2>  
	
                    <div id="content_actu">
	                    <h1 style="font-size: 2em">Le projet Athotz</h1>
	                    <div id="para_actu">
	                     	<p style="font-size: 1.2em">Une plateforme de mise en relation intergenerationelle qui se lance sur une double mission </p>
							<p style="font-size: 1.2em">Permettre aux jeunes d’améliorer leur orthographe et aux seniors de mieux appréhender le numérique</p>
	                     </div>
	                 </div>
                     
               
    </section>
	<section id="section2_actu">
		<h2>En Plus</h2> 
		<div id="content2_actu">
			 <?php            
         try {
            $req=$pdo->query("SELECT * FROM posts, user, category
                                       WHERE post_author=ID
                                       AND post_category=cat_id 
                                       ORDER BY post_date DESC  LIMIT 3");
            $req->setFetchMode(PDO ::FETCH_ASSOC); 
            $key = $req->fetchAll();
        	foreach ($key as $value ) {   
        ?>
				<div>
					<img src="style/img/superphotodegroupe.jpg">
					<h1><a href='article.php?id=<?= $value["post_id"]; ?>'><?=$value["post_title"]; ?></a></h1>
					<div class="para2_actu">
						<p><?= mb_strimwidth($value["post_content"], 0, 120, "..."); ?></p>
						<p><i>Classé dans la catégorie "<?= $value["cat_descr"]; ?>"</i></p>
					</div>
				</div>
				<?php
				} 
				?>
		</div>
	</section>
		<?php
	       $req->closeCursor();
        }
        catch(exception $e) {
            die("erreur MySQL : ".$e->getMessage());
        }
    ?>
</main>
<?php
	require_once('layout/footer.inc.php')
?>
