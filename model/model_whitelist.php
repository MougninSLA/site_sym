<?php

	if(isset($_POST['confirmer'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$createur=$_SESSION['id_user_result'];
		#-----------------------------------------------------------------------------------------#

		$existe = whitelist($adresse);
		
		if($existe == "true"){

			echo "<script language=\"javascript\">";
        	echo "alert('Cette whitelist a déjà été inscrite')";
        	echo "</script>";
		
		} elseif ($existe == "false") {
			add_whitelist($nom,$adresse,$pays,$ville,$createur);
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$contenu = $_SESSION['notification_whitelist_user'];
			$contenu = str_replace("XXX", $expediteur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Whitelist";
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $createur, $destinataire, $adresse, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('Une demande d\'ajout de cette whitelist a été envoyée à l\'administrateur. Vous obtiendrez une reponse dans les plus brefs delais.')";
	    	echo "</script>";
		} else {
			add_whitelist($nom,$adresse,$pays,$ville,$createur);
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$contenu = $_SESSION['notification_whitelist_user'];
			$contenu = str_replace("XXX", $expediteur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Whitelist";
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $createur, $destinataire, $adresse, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('Une demande d\'ajout de cette whitelist a été envoyée à l\'administrateur. Vous obtiendrez une reponse dans les plus brefs delais.')";
	    	echo "</script>";
	}

	if (isset($_SESSION['whitelist'])) {
		$whitelist = $_SESSION['whitelist'];
	}

	if (isset($_POST['oui'])) {
		del_whitelist($whitelist);
		echo "<script language=\"javascript\">";
    	echo "alert('La whitelist a bien été supprimée')";
    	echo "</script>";
    }
}

?>