<?php
	require_once('layout/header.inc.php');
	require_once('layout/init.inc.php');
?>

	<main>
		<section id="section1_home">
			<div>
				<h1>Le reverse mentoring <br/>entre particuliers</h1>
				<p>Jeune ou Senior ? Améliorer vos compétences <br/>langagières ou numériques gratuitement !</p>
			</div>
			<div>
				<a href="inscription.php"><button>Commencer maintenant !</button></a>
				<div>
					<!--https://www.paypal.com/cgi-bin/webscr url pour les vrai adresse paypal -->
          <!-- Si vous voulez modifier la doc est votre ami bon courage, des bisous <3 -->
          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
              <input name="amount" type="hidden" value="1" /> <!-- valeur panier -->
              <input name="currency_code" type="hidden" value="EUR" /> <!-- devise -->
              <input name="shipping" type="hidden" value="00" />
              <input name="tax" type="hidden" value="00" />
              <input name="return" type="hidden" value="http://psalesse.eemi.tech/athotz/" /> <!-- paiement accepté -->
              <input name="cancel_return" type="hidden" value="http://www.monsite.com/panier.php" /> <!-- annulé le paiement -->
              <input name="notify_url" type="hidden" value="http://www.monsite.com/ipn.php" />
              <input name="cmd" type="hidden" value="_xclick" />
              <input name="business" type="hidden" value="valnolife@gmail.com" /> <!-- mon compte -->
              <input name="item_name" type="hidden" value="Le texte que vous voulez" /> <!-- description du produit -->
              <input name="no_note" type="hidden" value="1" />
              <input name="lc" type="hidden" value="FR" />
              <input name="bn" type="hidden" value="PP-BuyNowBF" />
              <input name="custom" type="hidden" value="45" />
              <input class="bouton" type="submit" value="Soutenez-nous" /> <!-- valider -->
          </form>
				</div>
			</div>
		</section>
		<section id="section2_home">
			<div>
				<h2>Découvrer Athotz</h2>
				<p>Athotz est votre nouvelle plateforme de reverse mentoring.</p>
				<p>Ne dépensez plus des fortunes dans des cours de français.<br/>
				Formez-vous aux nouvelles technologies et valoriser vos compétences.</p>
				<p>Athotz est fait pour vous ! Alors n’hésitez plus et rejoignez-nous !</p>
			</div>
			<div>
				<a href="equipe.php"><button>En savoir plus</button></a>
			</div>
		</section>
		<section id="section3_home">
			<a href="cours.php"><h2>Cours</h2></a>
			<div>
				<div class="cours_home">
					<a href="cours.php"><img src="style/img/orthographe.png"></a>
					<p>Orthographe</p>
				</div>
				<div class="cours_home">
					<a href="cours.php"><img src="style/img/001-browser.png"></a>
					<p>Informatique</p>
				</div>
				<div class="cours_home">
					<a href="cours.php"><img src="style/img/002-germany.png"></a>
					<p>Allemand</p>
				</div>
			</div>
		</section>
		<section id="section4_home">
			<div>
				<a href="actu.php"><h2>Actualités</h2></a>
				<?php
				try {
            $req=$pdo->query("SELECT * FROM posts, user, category
                                       WHERE post_author=ID
                                       AND post_category=cat_id
                                       ORDER BY post_date DESC LIMIT 3");
            $req->setFetchMode(PDO ::FETCH_ASSOC);


            $key = $req->fetchAll();
            ?>

				<div id="content1_home">
					<h1 style="font-size: 2em">Le projet Athotz</h1>
					<div id="content2_home">
						<p style="font-size: 1.2em">Une plateforme de mise en relation intergenerationelle qui se lance sur une double mission </p>
						<p style="font-size: 1.2em">Permettre aux jeunes d’améliorer leur orthographe et aux seniors de mieux appréhender le numérique</p>
					</div>
				</div>
			</a></span>
			<div id="content3_home">
				<?php
				foreach ($key as $value) {
            	?>
				<div>
					<img src="style/img/superphotodegroupe.jpg">

					<h1><a href='article.php?id=<?= $value["post_id"]; ?>'><?=$value["post_title"]; ?></a></h1>
					<div class="para_home">
						<p><?= mb_strimwidth($value["post_content"], 0, 200, "..."); ?></p>
						<p><i>Classé dans la catégorie "<?= $value["cat_descr"]; ?>"</i></p>
					</div>
				</div>
				<?php } ?>

			</div>

		<?php

            $req->closeCursor();
        }
        catch(exception $e) {
            die("erreur MySQL : ".$e->getMessage());
        }
    ?>
		</section>
		<section id="section5_home">
			<div id="map">
				<div id="map_icon">
					<div><img alt="icon" src="style/img/adress.png"></div>
					<div><img alt="icon" src="style/img/mail.png"></div>
					<div><img alt="icon" src="style/img/telephone.png"></div>
				</div>

				<div id="map_text">
					<div>28, Place de la Bourse</div>
					<div>athotz.team@web.com</div>
					<div>07.12.34.56.67</div>
				</div>
			</div>
			<!--<div><iframe src="https://www.google.fr/maps/place/Place+de+la+Bourse,+75002+Paris/@48.8687966,2.3385423,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e3c67352799:0x67e68fc6159d3324!8m2!3d48.8687966!4d2.340731"></iframe></div>-->
			<div id="form-map">
				<h2>Nous Contacter</h2>
				<form method="post" action="#" id="formHome">
					<div>
						<input type="text" name="name" placeholder="Nom" class="main_form">
					</div>
					<div>
						<input type="email" name="mail" placeholder="Adresse mail" class="main_form">
					</div>
					<div>
						<textarea name="message" placeholder="Votre Message ..."></textarea>
					</div>
					<div id="check">
						<div>
							<input type="submit" value="Envoyez" id="push_form">
						</div>
				</div>
				</form>
			</div>
		</section>


			<div id="tchat" class="normal">
				<div id="tchat-header">
					<div>Chat</div>
					<div><a href="#" onclick="tchat()"><img alt="réduire" src="style/img/reduire.png"></a></div>
				</div>
				<div id="affichage">
					<!-- TCHAT -->
				</div>
				<div id="form-tchat">
					<form method="post" action="request.php">
						<fieldset>
							<legend>Votre Message</legend>
							<div class="label"><label for="pseudo">Pseudo</label></div>
							<div class="input"><input id="pseudo" name="pseudo" type="text" required></div>
							<div class="input"><textarea name="message" id="message"></textarea></div>
							<div><input type="submit" name="post" value="Envoyer" id="envoi"></div>
						</fieldset>
					</form>
				</div>

			</div>
			<div id="sneaky-header" class="sneaky">
				<div>Chat</div>
				<div><a href="#" onclick="koukou()"><img alt="réduire" src="style/img/reduire.png"></a></div>
			</div>

		</main>
		<!-- Menu de tchat en bas à droite -->
		<script src="style/tchat.js"></script>

		<!-- Script JS et AJAX du tchat -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript">
		$('#envoi').click(function(e){
			e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

			var pseudo = encodeURIComponent( $('#pseudo').val() ); // on sécurise les données
			var message = encodeURIComponent( $('#message').val() );

			if(pseudo != "" && message != ""){ // on vérifie que les variables ne sont pas vides
				$.ajax({
					url : "request.php", // on donne l'URL du fichier de traitement
					type : "POST", // la requête est de type POST
					data : "pseudo=" + pseudo + "&message=" + message // et on envoie nos données
				});
				$('#affichage').append("<p>" + pseudo + " dit : " + message + "</p>"); // on ajoute le message dans la zone prévue
				document.getElementById("pseudo").value = "";
				document.getElementById("message").value = "";
			}
		});

		function charger(){
			setTimeout( function(){
				// on lance une requête AJAX
				$.ajax({
					url : "charger.php",
					type : "GET",
					success : function(html){
						$('#affichage').prepend(html); // on veut ajouter les nouveaux messages au début du bloc #messages
					}
				});
				charger(); // on relance la fonction
			}, 1000); // on exécute le chargement toutes les 1 secondes
		}
		charger();
		</script>

	</main>
</body>
<?php
	require_once('layout/footer.inc.php');
?>
