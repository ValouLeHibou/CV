<?php require_once('layout/header.inc.php'); ?>
<?php require_once('layout/init.inc.php'); ?>
<?php require_once('protection2.php'); ?>


	<main id="account">
      <div id="container">
        <div id="white-box">
          <div id=profil>
            <?php
            	if(isset($_SESSION['user2'])) {
			?>
	<div id="img-profil">
              <img width="180px" height="180px" alt="photo" src="<?=$_SESSION['user2']['user2_photo'];?>" />
            </div>
	<div id="name">
		<h2><?=$_SESSION['user2']['user2_prenom'];?> <?=$_SESSION['user2']['user2_nom'];?></h2>
	</div>
	<?php } ?>

          </div>
          <div id=onglet>
						<a href="#" onclick="onglet(this.id)" class="case active" id="classroom">Cours</a>
						<a href="#" onclick="onglet(this.id)" class="case" id="histo">Historique</a>
						<a href="#" onclick="onglet(this.id)" class="case" id="note">Note et avis</a>
						<a href="#" onclick="onglet(this.id)" class="case" id="compte">Mon compte</a>
          </div>
			<div class="classroom js">
	          <div class=principal>
							<div><h3>Cours disponibles</h3></div>
	          	<div class="cours">
	          			<?php
	          				ini_set('display_errors', 1);
										ini_set('display_startup_errors', 1);
										error_reporting(E_ALL);

	          				try {
            					$req=$pdo->query("SELECT * FROM cours ORDER BY cours_id");
            					$req->setFetchMode(PDO ::FETCH_ASSOC);
            					$key = $req->fetchAll();
            					foreach ($key as $value) {
            			?>

								<div class="matiere">
									<div class="section-matiere">
										<div class="portrait">
											<img src="<?=$value['cours_picto']?>" alt="photo">
										</div>
										<div>
											<a href="cours_book_insert.php?id_cours=<?=$value['cours_id']?>"><h4><?=$value['cours_name']?></h4></a>
										</div>
									</div>
								</div>
					       	<?php }
							 $req->closeCursor();
				        }
				        catch(exception $e) {
				            die("erreur MySQL : ".$e->getMessage());
				        }
				    ?>
					</div>
				</div>

						<div class=principal>
							<div><h3>Réservations</h3></div>
							<div class="cours">
								<?php
								try {
									$req=$pdo->query("SELECT id_user2, id_cours, cours_id, cours_name, cours_picto
																			FROM cours_book
																			INNER JOIN cours
																			WHERE cours.cours_id = cours_book.id_cours
																			AND id_user2 = 9
																			ORDER BY ID");
									$req->setFetchMode(PDO ::FETCH_ASSOC);
									$key = $req->fetchAll();
									foreach ($key as $value) {
									?>

								<div class="matiere">
									<div class="section-matiere">
										<div class="portrait"><img src="<?=$value["cours_picto"]?>" alt="photo"></div>
										<div><h4><?=$value["cours_name"]?></h4></div>
									</div>
								</div>

							<?php }
								$req->closeCursor();
								}
								catch(exception $e) {
									die("erreur MySQL : ".$e->getMessage());
								}
							?>

							</div>
	          </div>
					</div>

<!-- *******  HIDDEN !!!!!  ******* -->

					<div class="hidden histo js">
						<div class=principal>
							<div class="cours cours_histo">
								<div><h3>Derniers cours en date</h3></div>
								<?php
								try {
									$req=$pdo->query("SELECT id_user2, id_cours, cours_id, cours_name, book_date, cours_picto
																			FROM cours_book
																			INNER JOIN cours
																			WHERE cours.cours_id = cours_book.id_cours
																			AND id_user2 = 9
																			ORDER BY ID ASC LIMIT 4");
									$req->setFetchMode(PDO ::FETCH_ASSOC);
									$key = $req->fetchAll();
									foreach ($key as $value) {
									?>
								<div class="matiere inline">
									<div><h3><?=$value["book_date"]?><h3></div>
									<div class="portrait"><img alt="matiere" src="<?=$value["cours_picto"]?>"/></div>
									<div><h4><?=$value["cours_name"]?></h4></div>
								</div>

							<?php }
							$req->closeCursor();
							}
							catch(exception $e) {
								die("erreur MySQL : ".$e->getMessage());
							}
							?>
							</div>
						</div>
					</div>

<!-- ******************************-->

					<div class="hidden note js">
						<div class=principal>
							<div class="cours">
									<div><h3>Dernier(s) cour(s) reçu(s)</h3></div>
									<div class="matiere inline">
										<div class="portrait"><img alt="matiere" src="style/img/portrait.jpg"/></div>
										<div class="portrait"><img alt="matiere" src="style/img/portrait.jpg"/></div>
										<div><h3>Orthographe avec Simon B.<h3></div>
										<div class="star">
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
										</div>
										<div><a class="avi" href=#>Validez avi</a></div>
								</div>
							</div>
						</div>

						<div class=principal>
							<div class="cours">
									<div><h3>Dernier(s) cour(s) donné(s)</h3></div>
									<div class="matiere inline">
										<div class="portrait"><img alt="matiere" src="style/img/portrait.jpg"/></div>
										<div class="portrait"><img alt="matiere" src="style/img/portrait.jpg"/></div>
										<div><h3>Orthographe avec Simon B.<h3></div>
										<div class="star">
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
											<img alt="portrait" src="style/img/star_empty.png"/>
										</div>
										<div><a class="avi" href=#>Validez avi</a></div>
								</div>
							</div>
						</div>
					</div>

<!-- ******************************-->

					<div class="hidden compte js">
						<div class=principal>
							<form method="post" action="#" id="form">
								<div id="form_name">
									<div class="blue_line">
										<div class="label">
											<label for="prenom">Prénom : </label>
										</div>
										<div class="input">
											<input type="text" name="prenom" id="prenom"/>
										</div>
									</div>
									<div class="blue_line">
										<div class="label">
											<label for="nom">Nom : </label>
										</div>
										<div class="input">
											<input type="text" name="nom" id="nom"/>
										</div>
									</div>
								</div>

								<div id="from_info">
									<div class="blue_line">
										<div class="label">
											<label for="email">Adresse mail : </label>
										</div>
										<div class="input">
											<input type="email" name="email" id="email"/>
										</div>
									</div>

									<div class="blue_line">
										<div class="label">
											<label for="mdp">Mot de passe : </label>
										</div>
										<div class="input">
											<input type="email" name="mdp" id="mdp"/>
										</div>
									</div>

									<div class="blue_line">
										<div class="label">
											<label for="adresse">Adresse : </label>
										</div>
										<div class="input">
											<input type="email" name="adresse" id="adresse"/>
										</div>
									</div>

									<div class="blue_line">
										<div class="label">
											<label for="date">Date de naissance : </label>
										</div>
										<div class="input">
											<input type="email" name="date" id="date"/>
										</div>
									</div>
							</div>
							<div>
								<input type="submit" value="Changer les informations" id="push_form">
							</div>
						</form>
						</div>
					</div>
        		</div>
      		</div>
		</main>

		<script src="style/account.js"></script>

<?php require_once('layout/footer.inc.php'); ?>
