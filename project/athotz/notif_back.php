 <?php
 	if(isset($_GET["notif_back"])){
    if ($_GET["notif_back"] === 'nonOk'){
        echo"<h2>Ton article n'a pas été publié</h2>";
    }
    else{
    	echo "<h2>Ton article a bien été publié :)</h2>";
    }
  }
  ?> 
