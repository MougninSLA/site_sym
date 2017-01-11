<?php
	//RECUPERATION DU CHAMP A CHARGER
	$blacklist = $_GET['Id'];
	$_SESSION['blacklist'] = $blacklist;
	
	select_blacklist($_SESSION['blacklist']);

	//LES INCLUSIONS DU MODELE ET DE LA VUE
	include("./model/model_supprimer_blacklist.php");
	include("./view/view_supprimer_blacklist.php");
?>