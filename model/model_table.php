<?php

	if(isset($_POST['confirmer'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$createur=$_SESSION['prenom_result']." ".$_SESSION['nom_result'];
		#-----------------------------------------------------------------------------------------#

		$existe = domain($adresse);
		
		if($existe == "true"){

			echo "<script language=\"javascript\">";
        	echo "alert('Ce domaine a déjà été inscrite')";
        	echo "</script>";
		
		} elseif ($existe == "false") {
			add_domain($nom,$adresse,$pays,$ville,$createur);

			$contenu = $_SESSION['notification_domain_user'];
			$contenu = str_replace("XXX", $createur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$type = "Ajout de Domaine";
			$expediteur = $createur;
			$destinataire = "0";
			$affichage = "1";

			add_notification($type, $contenu, $expediteur, $destinataire, $affichage);

			echo "<script language=\"javascript\">";
	    	echo "alert('La domaine a bien été ajoutée')";
	    	echo "</script>";
		} else {
			add_domain($nom,$adresse,$pays,$ville,$createur);

			$contenu = $_SESSION['notification_domain_user'];
			$contenu = str_replace("XXX", $createur, $contenu);
			$contenu = str_replace("DDD", $adresse, $contenu);
			$expediteur = $createur;
			$destinataire = "0";
			$affichage = "1";

			add_notification($type, $contenu, $expediteur, $destinataire, $affichage);
			
			echo "<script language=\"javascript\">";
        	echo "alert('Le domaine a bien été ajouté')";
        	echo "</script>";
		}
	}
	
	if (isset($_SESSION['domaine'])) {
		$domaine = $_SESSION['domaine'];
	}

	if (isset($_POST['oui'])) {
		del_domain($domaine);
	}
?>