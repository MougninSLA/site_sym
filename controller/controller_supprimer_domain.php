<?php
	//RECUPERATION DU CHAMP A CHARGER
	$domaine = $_GET['Id'];
	$_SESSION['domaine'] = $domaine;
	
	select_domain($domaine);

	//LES INCLUSIONS DU MODELE ET DE LA VUE
	include("./model/model_supprimer_domain.php");
	include("./view/view_supprimer_domain.php");
?>