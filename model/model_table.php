<?php

	if(isset($_POST['confirmer'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$expediteur=$_SESSION['prenom_result']." ".$_SESSION['nom_result'];
		$createur=$_SESSION['id_user_result'];
		#-----------------------------------------------------------------------------------------#

		$existe = domain($adresse);
		
		if($existe == "true"){

			echo "<script language=\"javascript\">";
        	echo "alert('Ce domaine a déjà été inscrit')";
        	echo "</script>";
		
		} elseif ($existe == "false") {
			add_domain($nom,$adresse,$pays,$ville,$createur);
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$contenu = $_SESSION['notification_domain_user'];
			$contenu = str_replace("XXX", $expediteur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Domaine";
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $createur, $destinataire, $adresse, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('Une demande d\'ajout de ce domaine a été envoyée à l\'administrateur. Vous obtiendrez une reponse dans les plus brefs delais.')";
	    	echo "</script>";
		} else {
			add_domain($nom,$adresse,$pays,$ville,$createur);
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$contenu = $_SESSION['notification_domain_user'];
			$contenu = str_replace("XXX", $expediteur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Domaine";
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $createur, $destinataire, $adresse, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('Une demande d\'ajout de ce domaine a été envoyée à l\'administrateur. Vous obtiendrez une reponse dans les plus brefs delais.')";
	    	echo "</script>";
		}
	}
	
	if (isset($_SESSION['domaine'])) {
		$domaine = $_SESSION['domaine'];
	}

	if (isset($_POST['oui'])) {
		$address_domain = $_POST['address_domain'];
		del_domain($domaine,$address_domain);
	}
?>