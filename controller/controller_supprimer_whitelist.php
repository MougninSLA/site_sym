<?php
	//RECUPERATION DU CHAMP A CHARGER
	$whitelist = $_GET['Id'];
	$_SESSION['whitelist'] = $whitelist;
	
	select_whitelist($whitelist);

	//LES INCLUSIONS DU MODELE ET DE LA VUE
	include("./model/model_supprimer_whitelist.php");
	include("./view/view_supprimer_whitelist.php");
?>