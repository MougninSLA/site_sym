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

?>