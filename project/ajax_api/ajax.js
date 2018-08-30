document.getElementById('button').onclick = function() {
	
	setTimeout(meteo, 5000);

	var name = document.getElementById('input').value;
	
	var xhr = new XMLHttpRequest();
	var api = 'http://api.openweathermap.org/data/2.5/weather?q=' + name + '&appid=9fd268ef158af687163df721d4765f29';
	xhr.open('GET', api);
	xhr.onreadystatechange = function() {
//		vérification de réponse du serveur
		if (xhr.readyState === 4) {
//			Conversion en Objet JSON
			var reponse = JSON.parse(xhr.responseText);
			console.log(reponse);
			document.getElementById("humidity").innerHTML = reponse.main.humidity;
		    reponse.main.temp -= 273.15;
		    reponse.main.temp = reponse.main.temp.toFixed(1);
		    document.getElementById("temp").innerHTML = reponse.main.temp;
			document.getElementById("meteo").innerHTML = reponse.weather["0"].description;
		}
	}
//	IMPORTANT !!!
	xhr.send();
}