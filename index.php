<?php
	//Forcer le serveur à pme ramener les pages en UTF-8
	header('Content-Type: text/html; charset=utf-8');

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

				case "view_admin_profil":
					if (($_SESSION['login_result']) !== "administrator") {
						include("./controller/404.php");
					} else {
						include("./controller/controller_admin_profil.php");
					}
					break;

				case "view_dashboard":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_dashboard.php");
					}
					break;

				case "view_load_domain":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_load_domain.php");
					}
					break;

				case "view_load_whitelist":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_load_whitelist.php");
					}
					break;

				case "view_load_blacklist":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_load_blacklist.php");
					}
					break;

				case "view_supprimer_domain":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_supprimer_domain.php");
					}
					break;

				case "view_supprimer_whitelist":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_supprimer_whitelist.php");
					}
					break;

				case "view_supprimer_blacklist":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_supprimer_blacklist.php");
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

				case "view_notif":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/view_notif.php");
					}
					break;

				case "deconnexion":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/deconnexion.php");
					}
					break;				
				case "show_edit_domain":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_show_edit_domain.php");
					}
					break;				
				case "edit_domain":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_edit_domain.php");
					}
					break;				
				case "del_domain":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_del_domain.php");
					}
					break;					
				case "add_domain":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_add_domain.php");
					}
					break;				
				case "show_user":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_show_user.php");
					}
					break;				
				case "show_edit_user":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_show_edit_user.php");
					}
					break;				
				case "edit_user":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_edit_user.php");
					}
					break;				
				case "add_user":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_add_user.php");
					}
					break;				
				case "del_user":
					if (!isset($_SESSION['login_result'])) {
						include("./controller/404.php");
					} else {
						include("./controller/controller_del_user.php");
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