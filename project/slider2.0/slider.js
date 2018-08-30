var img = document.getElementsByClassName("image");

// hidden images
var length = img.length;
var compteur = 0;
while (compteur < length - 1)
	{
		img[compteur].style.opacity = 0;
		compteur++;
	}

// Vitesse des slides
var select = document.getElementById("speed").value * 1000;

// Execution de la loop
var loop = setInterval(slide, select);

// Mise à jour de la vitesse
document.getElementById("speed").onchange = function() {
	clearInterval(loop);
	select = document.getElementById("speed").value * 1000;
	loop = setInterval(slide, select);
}

function slide() {
	// création de variables uniquement  utilisées dans "down_timer"
	var opacite = 1;
	if (typeof next_compteur == 'undefined') {
		var next_compteur = compteur;
		var next_opacite = opacite;
	}	
	var down_timer = setInterval(function () {
		if (next_opacite <= 0)
			clearInterval(down_timer);
		next_opacite = next_opacite - 0.05;
		img[next_compteur].style.opacity = next_opacite;
	}, 30);

	// on avance d'une image dans le tableau
	compteur++;
	if (compteur === length)
		compteur = 0;

	// création de variables uniquement  utilisées dans "up_timer"
	opacite = 0;
	if (typeof up_next_compteur == 'undefined') {
		var up_next_compteur = compteur;
		var up_next_opacite = opacite;
	}
	var up_timer = setInterval(function () {
		if (up_next_opacite >= 1)
			clearInterval(up_timer);
		up_next_opacite = up_next_opacite + 0.05;
		img[up_next_compteur].style.opacity = up_next_opacite;
	}, 30);
}