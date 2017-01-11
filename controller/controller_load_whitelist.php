<?php
	//RECUPERATION DU CHAMP A CHARGER
	$whitelist = $_GET['Id'];
	select_whitelist($whitelist);

	//LES INCLUSIONS DU MODELE ET DE LA VUE
	include("./model/model_load_whitelist.php");
	include("./view/view_load_whitelist.php");
?>