<?php

	if(isset($_POST['confirmer'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$createur=$_SESSION['id_user_result'];
		#-----------------------------------------------------------------------------------------#

		$existe = blacklist($adresse);
		
		if($existe == "true"){

			echo "<script language=\"javascript\">";
        	echo "alert('Cette blacklist a déjà été inscrite')";
        	echo "</script>";
		
		} elseif ($existe == "false") {
			add_blacklist($nom,$adresse,$pays,$ville,$createur);
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$contenu = $_SESSION['notification_blacklist_user'];
			$contenu = str_replace("XXX", $expediteur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Blacklist";
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $createur, $destinataire, $adresse, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('Une demande d\'ajout de cette blacklist a été envoyée à l\'administrateur. Vous obtiendrez une reponse dans les plus brefs delais.')";
	    	echo "</script>";
		} else {
			add_blacklist($nom,$adresse,$pays,$ville,$createur);
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$contenu = $_SESSION['notification_blacklist_user'];
			$contenu = str_replace("XXX", $expediteur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Blacklist";
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $createur, $destinataire, $adresse, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('Une demande d\'ajout de cette blacklist a été envoyée à l\'administrateur. Vous obtiendrez une reponse dans les plus brefs delais.')";
	    	echo "</script>";
	}

	if (isset($_SESSION['blacklist'])) {
		$blacklist = $_SESSION['blacklist'];
	}

	if (isset($_POST['oui'])) {
		del_blacklist($blacklist);
		echo "<script language=\"javascript\">";
    	echo "alert('La blacklist a bien été supprimée')";
    	echo "</script>";
    }
}

?>