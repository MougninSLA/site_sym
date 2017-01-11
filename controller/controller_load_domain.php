<?php
	//RECUPERATION DU CHAMP A CHARGER
	$domaine = $_GET['Id'];
	select_domain($domaine);

	//LES INCLUSIONS DU MODELE ET DE LA VUE
	include("./model/model_load_domain.php");
	include("./view/view_load_domain.php");
?>