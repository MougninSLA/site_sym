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
			$contenu = $_SESSION['notification_blacklist_user'];
			$contenu = str_replace("XXX", $createur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Blacklist";
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $expediteur, $destinataire, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('La blacklist a bien été ajoutée')";
	    	echo "</script>";
		} else {
			add_blacklist($nom,$adresse,$pays,$ville,$createur);
			$contenu = $_SESSION['notification_blacklist_user'];
			$contenu = str_replace("XXX", $createur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Blacklist";
			$expediteur = $_SESSION['prenom_result']." ".$_SESSION['nom_result'];
			$destinataire = "0";
			$affichage = "1";
			add_notification($type, $contenu, $expediteur, $destinataire, $affichage);
			echo "<script language=\"javascript\">";
	    	echo "alert('La blacklist a bien été ajoutée')";
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