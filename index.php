<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="CV" content="Bienvenue sur mon CV">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/> <!-- Responsive -->
		<title>Bienvenue sur mon CV</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen"/>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/stars.css">
		<link rel="stylesheet" type="text/css" href="css/feature.css">
		<link rel="icon" type="image/png" href="img/icon/favicon.ico" />
	</head>
	<?php
// 	include 'backoffice/connexion.php';
	?>

	<body>
<!-- 		<div class="loader"> -->
<!-- 			<div class="wrapper"> -->
<!-- 				<p>Loading...</p> -->
<!-- 				<div class="perp" id="p1"></div> -->
<!-- 				<div class="perp" id="p2"></div> -->
<!-- 				<div class="perp" id="p3"></div> -->
<!-- 			</div> -->
<!-- 		</div> -->
		<?php include("include/aside.php"); ?>
		<header id="home" class="slide" data-section-name="home">
			<div id='stars'></div>

			<?php include("include/nav.php"); ?>

			<div id="descr">
				<h1>Valentin Guilbaud</h1>
				<h2>Développeur Full Stack</h2>
				<div class="row">
					<div class="col l3 m6 s12" id="mail">
						valentin.guilbaud75013<br>@gmail.com
					</div>
					<div class="col l3 m6 s12" id="date">
						30 Novembre 1995,<br>22 ans
					</div>

					<div class="col l3 m6 s12" id="phone">
						06.84.68.00.85<br>01.44.23.81.80
					</div>

					<div class="col l3 m6 s12" id="adress">
						93 Avenue de Choisy,<br>75013 Paris
					</div>
				</div>
				<div class="row">
					<div class="col l2 m2"></div>
					<div class="col l8 m8 s12" id="text-descr">
						Développeur web, je suis quelqu’un de connecté, je ne me laisse pas dépasser par l’évolution plus
						que rapide de ce secteur. Mon travail étant ma passion, mes objectifs sont de gagner en compétences
						et de poursuivre mon apprentissage dans le milieu de l’entreprise.
					</div>
					<div class="col l2 m2"></div>
				</div>
				<div class="row">
					<div class ="col l12 m4 s12" id="my_project">
						<a href="project.php">Pour mes Projets, c'est par ici !</a>
					</div>
				</div>
				<a class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
			</div>

			<ul class="pagination">
				<li>
					<a class="active" href="#home"><span class="hover-text">Home</span></a>
				</li>
				<li>
					<a class="" href="#formation"><span class="hover-text">Formations</span></a>
				</li>
				<li>
					<a class="" href="#exp"><span class="hover-text">Expériences</span></a>
				</li>
				<li>
					<a class="" href="#comp"><span class="hover-text">Compétences</span></a>
				</li>
				<li>
					<a class="" href="#langue"><span class="hover-text">Langues</span></a>
				</li>
				<li>
					<a class="" href="#interest"><span class="hover-text">Intérêts</span></a>
				</li>
			</ul>
		</header>

 <!-- *********************************** FORMATION ********************************* -->

		<main>
			<section class="parallax-container slide" id="formation" data-section-name="formation">
				<div class="parallax"><img src="img/space.png" alt="bgspace"></div>
				<div class="row">
					<img alt="formation" src="img/icon/formation.png" class="icon">
					<h2>Formation</h2>
				</div>
				<div class="row">
					<div class="col l12 m12 s12" id="encpb">
						<div><img src="img/icon/encpb.png" id="icon-encpb"></div>
						<div class="crochet">(École Nationale de Chimie Physique Biologie)</div>
						<div class="date-ecole">2013-2014</div>
						<div class="descr-ecole">Optention d'un BAC STL (Sciences Techniques de Laboratoire) Mention Assez Bien</div>
					</div>
				</div>

				<hr id="hr-encpb">

				<div class="row" id="post-bac">
					<div class="col l6 m12 s12" id="epitech">
						<div class="col l12 m12 s12" id="head-epitech">
							<div class="icon-ecole"><img src="img/icon/epitech.png" id="icon-epitech"></div>
							<div class="date-ecole">2014-2016</div>
						</div>

						<div class="row">
							<div class="col l6 m6 s12" id="descr-epitech">
								<div class="year">1ère année</div>
								<ul class="form-list">
									<li>Langage C</li>
									<li>Git - GitHub - GitLab</li>
									<li>Shell - Shell script / Bash</li>
									<li>Linux</li>
								</ul>
							</div>

							<hr/ class="hr-ecole">

							<div class="col l6 m6 s12">
								<div class="year">2ème année</div>
								<ul class="form-list">
									<li>Langage C++</li>
									<li>Langage C</li>
									<li>Réseau</li>
									<li>Shell</li>
								</ul>
							</div>
						</div>
					</div>

					<hr id="big-hr">

					<div class="col l6 m12 s12" id="eemi">
						<div class="row" id="head-eemi">
							<div class="col l12 m12 s12">
								<div class="icon-ecole"><img src="img/icon/eemi.png" id="icon-eemi"></div>
								<div class="date-ecole">2016-2019</div>
							</div>
						</div>
						<div class="row" id="descr-eemi">
							<div class="col l6 m6 s12">
								<div class="year">1ère année</div>
								<p class="title-list">
									Tronc Commun<br>
									Dev / Design / Market :
								</p>
								<ul class="form-list">
									<li>HTML - CSS - JS - PHP - SQL</li>
									<li>Adobe Photoshop - Illustrator</li>
									<li>Entreprenariat & Gestion de Projet</li>
								</ul>
							</div>

							<hr/ class="hr-ecole">

							<div class="col l6 m6 s12">
								<div class="year">2ème année</div>
								<p class="title-list">Spécialisation Développement :</p>
								<ul class="form-list">
									<li>Framework CSS Materialize</li>
									<li>Framework PHP Laravel & Symfony</li>
									<li>Jquery</li>
									<li>Sécurité & Réseau</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

<!-- ********************************* EXPERIENCE ************************************ -->

			<section class="parallax-container shadow slide" id="exp" data-section-name="exp">
				<div class="parallax bgcircle"></div>
				<div class="row">
					<img alt="exp" src="img/icon/exp.png" class="icon">
					<h2>Expériences</h2>
				</div>
				<div class="row">
					<div class="col l3 m3 s3" id="microdon-logo">
						<div><img src="img/icon/microdon.png"></div>
						<div class="exp-date">Mars à Aout 2018 (5 mois)</div>
					</div>

					<div class="col l1 m0 s0"></div>

					<div class="col l8 m8 s12" id="microdon-text">
						<h3>Stage DevOps :</h3>
						<p>
							Au sein de l'entreprise sociale et solidaire <span class="glow">MicroDON</span>, j'ai réalisé un stage de <span class="glow">5 mois</span> dans le milieu du <span class="glow">DevOps</span>.
							Ma mission était de me former aux différentes technologies utilisées : <span class="glow">Docker - Kubernetes - Google Cloud Plateform</span>
							pour pouvoir les documenter et par la suite y développer des fonctionnalités. J'ai qui plus est, eu l'occasion de travailler sur le <span class="glow">Framework Symfony</span>
							le tout couplé au sytème <span class="glow">Nginx</span>.
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col l8 m8 s12" id="aragon-text">
						<h3>Stage Développeur Full Stack :</h3>
						<p>
							C'est ici que j'ai découvert le milieu du web. <span class="glow">Aragon-erh</span> est une entreprise gérant une application des gestion RH.
							J'ai tout d'abord effectué un stage de 6 mois où j'ai pu m'auto former aux bases avec du : <span class="glow">HTML - CSS - JS - PHP - SQL</span>.
							J'ai par la suite travaillé sur le <span class="glow">Framework CakePhp</span> et j'y ai découvert la programmation orienté objet.
							Ma formation s'est faite principalement via des tickets de débug, j'ai aussi découvrir les <span class="glow">méthodes Agiles & Srcum</span> en entreprise.<br>
							Plus tard dans mes études, content de mon travail, Aragon-Erh a accepté de me repprendre pour 2 mois. Stage dans lequel		j'ai pu consolider mes conaissance déjà aquises.
						</p>
					</div>

					<div class="col l1 m1 s1"></div>

					<div class="col l3 m3 s3" id="aragon-logo">
						<div><img src="img/icon/aragon.png"></div>
						<div class="exp-date">Juillet à Décembre 2016 + Juin à Juillet 2017 (8 mois)</div>
					</div>
				</div>

				<div class="row">
					<div class="col l3 m3 s3" id="entrepreneur-logo">
						<div><img src="img/icon/tool.png"></div>
						<div class="exp-date">Depuis 2014</div>
					</div>

					<div class="col l1 m1 s1"></div>

					<div class="col l8 m8 s12" id="entrepreneur-text">
						<h3>Maintenance informatique à domicile :</h3>
						<p>
							J'ai toujours aimé nettoyer, réparer des PC. En gros, être un <span class="glow">technicien de maintenance informatique</span>. J'ai tout d'abord débuté comme tout le monde
							en réparant les PC de la famille et des amis. Puis celà s'est de plus en plus concrêtisé via l'élargissement de mon réseau.
						</p>
					</div>
				</div>
			</section>

<!-- ********************************** COMPETENCES ********************************** -->

			<section class="parallax-container shadow slide" id="comp" data-section-name="comp">
				<div class="parallax"><img src="img/tech.jpg" alt="bgtech"></div>
				<div class="row">
					<div><img alt="data" src="img/icon/database.png" id="comp-icon"></div>
					<h2>Compétences</h2>
				</div>

					<?php include 'include/progress-bar.php'; ?>

				<h3>Autres Compétences :</h3>
				<div class="row">
					<div class="col l6 m12 s12 other-comp">
						<h4>Développement :</h4>
						<ul>
							<li>Framework : Bootstrap / Materialize / Symfony - Notions : CakePhp & Laravel</li>
							<li>Apache - Nginx</li>
							<li>Git / GitLab / FramaGit</li>
							<li>Autres Notions : Python, Java & BrainF*ck</li>
							<li>Compétences Hardware (Montage PC)</li>
							<li>Software (Windows/Linux)</li>
						</ul>
					</div>

					<hr/ id="hr-comp">

					<div class="col l6 m12 s12 other-comp">
						<h4>Design & Marketing :</h4>
						<ul>
							<li>Marketing Digital / E-Commerce / WebMarketing</li>
							<li>Travail en Méthodes Agiles</li>
							<li>Suite Adobe : Photoshop / Illustrator / Indesign</li>
							<li>Montage Vidéo</li>
						</ul>
					</div>
				</div>
			</section>

<!-- ********************************** LANGUES ********************************** -->

			<section class="parallax-container slide" id="langue" data-section-name="langue">
				<div class="parallax bgmap"></div>
				<div class="row">
					<img alt="langue" src="img/icon/langue.png" class="icon">
					<h2>Langues</h2>
				</div>
				<div class="row" id="country">
					<div class="col l6 m12 s12">
						<img alt="english" src="img/english.png" class="flag">
						<h3>Anglais</h3>
						<p>
							Niveau professionnel (TOEIC 700)<br>
							Nombreux voyages à l'étranger: Toronto, Montreal, Londres, New York ...
						</p>
					</div>
					<div class="col l6 m12 s12">
						<img alt="spain" src="img/spain.png" class="flag">
						<h3>Espagnol</h3>
						<p>Notions (Niveau A1)</p>
					</div>
				</div>
			</section>

<!-- ********************************** INTERET ********************************** -->

			<section class="parallax-container slide" id="interest" data-section-name="interest">
				<div class="parallax"><img src="img/gate.jpg" alt="bggate"></div>
				<div class="row">
					<img alt="french" src="img/icon/card.png" class="icon">
					<h2>Centres d'Intérêt</h2>
				</div>
				<div class="row element">
					<div class="col l6 m12 s12">
						<img alt="fuji" src="img/icon/fuji.png">
						<h3>Culture Nippone</h3>
						<p>Culture, Manga ...</p>
					</div>
					<div class="col l6 m12 s12">
						<img alt="circuit" src="img/icon/circuit.png">
						<h3>Culture Informatique</h3>
						<p>Montage vidéo Youtube, Veille Informatique, Jeux Vidéo ...</p>
					</div>
				</div>
				<div class="row element">
					<div class="col l6 m12 s12">
						<img alt="travel" src="img/icon/travel.png">
						<h3>Voyages</h3>
						<p>Indénombrables<br>(It's Over 9000 ?!)</p>
					</div>
					<div class="col l6 m12 s12">
						<img alt="sport" src="img/icon/sport.png">
						<h3>Sports</h3>
						<p>Fitness, Badminton, Marche ...</p>
					</div>
				</div>

				<hr id="hr-encpb">

				<div class="row footer">
					<div class="col l4 m4 s4">
						<div><a href="https://www.linkedin.com/in/valentin-guilbaud-23765a134/" target="_blank"><img alt="linkedin" src="img/icon/in.png"></a></div>
					</div>
					<div class="col l4 m4 s4">
						<div><a href="backoffice/back_login.php">Admin Backoffice</a></div>
					</div>
					<div class="col l4 m4 s4">
						<a href="#home"><img alt="arrow" src="img/icon/arrow-up.png"></a>
					</div>
				</div>
			</section>
		</main>

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
		<script type="text/javascript" src="include/scrollreveal.js"></script>
		<script type="text/javascript" src="include/media-query.js"></script> <!-- Désactive JS sur smartphone -->
		<script type="text/javascript" src="include/jquery.scrollify.js"></script>
		<script type="text/javascript" src="include/index.js"></script>
	</body>
</html>
