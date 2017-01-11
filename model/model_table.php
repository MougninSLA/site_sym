<?php

	if(isset($_POST['confirmer'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$createur=$_SESSION['id_user_result'];
		#-----------------------------------------------------------------------------------------#

		$existe = domain($adresse);
		
		if($existe == "true"){
			echo "<script language=\"javascript\">";
        	echo "alert('Ce domaine est déjà inscrit')";
        	echo "</script>";
		} elseif ($existe == "false") {
			add_domain($nom,$adresse,$pays,$ville,$createur);
			echo "<script language=\"javascript\">";
	    	echo "alert('Le domaine a bien été ajouté')";
	    	echo "</script>";
		} else {
			add_domain($nom,$adresse,$pays,$ville,$createur);
			echo "<script language=\"javascript\">";
        	echo "alert('Le domaine a bien été ajouté')";
        	echo "</script>";
		}
	}
	
	if(isset($_POST['modifier'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$domaine=$_SESSION['id_domain_result'];
		#-----------------------------------------------------------------------------------------#

		update_domain($nom,$adresse,$pays,$ville,$domaine);
		echo "<script language=\"javascript\">";
    	echo "alert('Le domaine a bien été modifié')";
    	echo "</script>";
	}

	if (isset($_SESSION['domaine'])) {
		$domaine = $_SESSION['domaine'];
	}

	if (isset($_POST['oui'])) {
		del_domain($domaine);
	}
?>