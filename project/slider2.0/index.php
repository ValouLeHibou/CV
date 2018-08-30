<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Content description">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/> <!-- Responsive -->
		<title>Slider</title>
		<link rel="stylesheet" type="text/css" href="slider.css">

	</head>
	<body>
		<h1>Slider JS</h1>
		<div id="slider">
			<ul>
				<li><img class="image" src="images/g1.jpg"></li>
				<li><img class="image" src="images/g2.jpg"></li>
				<li><img class="image" src="images/g3.jpg"></li>
				<li><img class="image" src="images/g4.jpg"></li>
				<li><img class="image" src="images/g5.jpg"></li>
			</ul>
		</div>
		<label for="speed">Vitesse</label>
			<select name="speed" id="speed">
			<option value="1">1 Seconde</option>
			<option value="2">2 Secondes</option>
			<option value="3">3 Secondes</option>
			<option value="4">4 Secondes</option>
			<option value="5">5 Secondes</option>
		</select>
	</body>
	<script type="text/javascript" src="slider.js"></script>
</html>
