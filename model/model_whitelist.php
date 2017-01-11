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
        	echo "alert('Cette whitelist existe déjà')";
        	echo "</script>";
		} elseif ($existe == "false") {
			add_whitelist($nom,$adresse,$pays,$ville,$createur);
			echo "<script language=\"javascript\">";
	    	echo "alert('La whitelist a bien été ajoutée')";
	    	echo "</script>";
		} else {
			add_whitelist($nom,$adresse,$pays,$ville,$créateur);
			echo "<script language=\"javascript\">";
        	echo "alert('La whitelist a bien été ajoutée')";
        	echo "</script>";
		}
	}
	
	if(isset($_POST['modifier'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$domaine=$_SESSION['id_whitelist_result'];
		#-----------------------------------------------------------------------------------------#

		update_whitelist($nom,$adresse,$pays,$ville,$domaine);
		echo "<script language=\"javascript\">";
    	echo "alert('Le domaine a bien été modifié')";
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

?>