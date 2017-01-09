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
        	echo "alert('Cet utilisateur est déjà inscrit')";
        	echo "</script>";
		} elseif ($existe == "false") {
			add_domain($nom,$adresse,$pays,$ville,$createur);
			echo "<script language=\"javascript\">";
	    	echo "alert('Le domaine a bien été ajouté')";
	    	echo "</script>";
		} else {
			add_domain($nom,$adresse,$pays,$ville,$créateur);
			echo "<script language=\"javascript\">";
        	echo "alert('Le domaine a bien été ajouté')";
        	echo "</script>";
		}
	}

?>