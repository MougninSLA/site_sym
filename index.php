<?php
	//Forcer le serveur à pme ramener les pages en UTF-8
	header('Content-Type: text/html; charset=utf-8');
?>

<?php
	//Appel de la page de configuration
	require_once'configuration.php';

	//Définition de variables de pages et sécurisation de la navigation
	if(!isset($_GET["index"])){
		include('./controller/controller_home.php');
	}
	else {
		
		if(!empty($_SESSION['login_result'])){

			switch(htmlentities($_GET["index"])){
				
				case "view_admin_index":
					if (($_SESSION['login_result']) !== "administrator") {
						include("./controller/404.php");
					} else {
						include("./controller/controller_admin_index.php");
					}
					break;

				case "view_admin_domaines":
					if (($_SESSION['login_result']) !== "administrator") {
						include("./controller/404.php");
					} else {
						include("./controller/controller_admin_domaines.php");
					}
					break;

				case "view_admin_blacklists":
					if (($_SESSION['login_result']) !== "administrator") {
						include("./controller/404.php");
					} else {
						include("./controller/controller_admin_blacklists.php");
					}
					break;

				case "view_admin_whitelists":
					if (($_SESSION['login_result']) !== "administrator") {
						include("./controller/404.php");
					} else {
						include("./controller/controller_admin_whitelists.php");
					}
					break;

				case "view_admin_users":
					if (($_SESSION['login_result']) !== "administrator") {
						include("./controller/404.php");
					} else {
						include("./controller/controller_admin_users.php");
					}
					break;

				case "view_dashboard":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_dashboard.php");
					}
					break;

				case "view_table":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_table.php");
					}
					break;

				case "view_whitelist":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_whitelist.php");
					}
					break;

				case "view_blacklist":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_blacklist.php");
					}
					break;

				case "view_user":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_user.php");
					}
					break;

				case "deconnexion":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/deconnexion.php");
					}
					break;

				default:
					include("./controller/controller_home.php");	
			}
		} else {
			include("./controller/controller_home.php");
		}
	}
?> 	