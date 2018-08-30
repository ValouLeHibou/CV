<?php
	require_once('layout/init.inc.php');

try {
	$query = "SELECT pseudo, message, date_heure FROM tchat ORDER BY ID DESC";
	$req = $pdo->query ( $query );
?>

	<script type="text/javascript">

	</script>
<?php
	$i = 0;
	$messages = null;
	while($donnees = $req->fetch()){
		if ($i != 10) {
			$messages .= "<p>" . $donnees['pseudo'] . " dit : <br>&nbsp;&nbsp;" . $donnees['message'] . "</p> <hr>";
			$i++;
		}
	}
	$c = 0;
	while ($c != 5) {
		$c++;
?>
	<script type="text/javascript">
		document.getElementById("affichage").innerHTML = " ";
		document.getElementById("affichage").innerHTML = '<?php echo $messages ?>';
	</script>
	<?php
		}
	} catch ( Exception $e ) {
		die ( "Erreur MySQL : " . $e->getMessage () );
	}
?>
