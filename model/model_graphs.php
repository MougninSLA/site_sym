<?php

function graph_day_spams($date){
	global $bdd;
	
	$req = $bdd->query("SELECT spam_mails FROM mails_journaliers WHERE jours LIKE '$date'");
	$donnees = $req->fetch();
	
	return $donnees;
	
}

function graph_month_spams($date){
	global $bdd;
	
	$req = $bdd->query("SELECT spam_mails FROM mails_mensuels WHERE mois LIKE '$date'");
	$donnees = $req->fetch();
	
	return $donnees;
	
}

function graph_year_spams($date){
	global $bdd;
	
	$req = $bdd->query("SELECT spam_mails FROM mails_annuels WHERE annees LIKE '$date'");
	$donnees = $req->fetch();
	
	return $donnees;
	
}
?>