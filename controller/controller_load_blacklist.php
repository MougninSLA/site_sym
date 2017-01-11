<?php
	//RECUPERATION DU CHAMP A CHARGER
	$blacklist = $_GET['Id'];
	select_blacklist($blacklist);

	//LES INCLUSIONS DU MODELE ET DE LA VUE
	include("./model/model_load_blacklist.php");
	include("./view/view_load_blacklist.php");
?>