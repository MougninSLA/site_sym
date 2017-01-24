<?php
	// Tout début du code PHP. Situé en haut de la page web
	// ini_set("display_errors",0);error_reporting(0);

	//Forcer le serveur à pme ramener les pages en UTF-8
	header('Content-Type: text/html; charset=utf-8');

	//Créer une session, la session qui va gérer le site
	if(!isset($_SESSION)){
		session_start();
		
		//---------------------------------------------------- Les messages -----------------------------------------------
		$_SESSION['notification_domain_user'] = "L'utilisateur XXX souhaite ajouter le domaine DDD";
		$_SESSION['notification_blacklist_user'] = "L'utilisateur XXX souhaite ajouter le domaine DDD à la blacklist";
		$_SESSION['notification_whitelist_user'] = "L'utilisateur XXX souhaite ajouter le domaine DDD à la whitelist";
		//------------------------------------------------------------------------------------------------------------------

		include("./model/model_bdd.php");
		include("./model/model_function.php");
		include("./model/model_graphs.php");
		include("./model/model_admin_domaines.php");
		include("./model/model_admin_users.php");
		include("./model/model_admin_whitelists.php");
		include("./model/model_admin_blacklists.php");
		
	}
	
	//Inclusion de tous les modèles
	// include("./model/model_home.php");

	//Constante de l'index
	define("INDEX","index.php");

	//Constante du CSS
	define("ASSET","./assets/css/");

	//Constante du JS
	define("JS","./assets/js/");

	//Constante des images
	define("IMG","./assets/img/");

	//Constante du style
	define("CSS","./assets/");
?>