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
        	echo "alert('Cette blacklist existe déjà')";
        	echo "</script>";
		} elseif ($existe == "false") {
			add_blacklist($nom,$adresse,$pays,$ville,$createur);
			echo "<script language=\"javascript\">";
	    	echo "alert('La blacklist a bien été ajoutée')";
	    	echo "</script>";
		} else {
			add_blacklist($nom,$adresse,$pays,$ville,$créateur);
			echo "<script language=\"javascript\">";
        	echo "alert('La blacklist a bien été ajoutée')";
        	echo "</script>";
		}
	}
	
	if(isset($_POST['modifier'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];
		$pays=$_POST['pays'];
		$ville=$_POST['ville'];
		$domaine=$_SESSION['id_blacklist_result'];
		#-----------------------------------------------------------------------------------------#

		update_blacklist($nom,$adresse,$pays,$ville,$domaine);
		echo "<script language=\"javascript\">";
    	echo "alert('Le domaine a bien été modifié')";
    	echo "</script>";
	}
	
	$blacklist = $_SESSION['blacklist'];

	if (isset($_POST['oui'])) {
		del_blacklist($blacklist);
		echo "<script language=\"javascript\">";
    	echo "alert('La blacklist a bien été supprimée')";
    	echo "</script>";
	}

?>