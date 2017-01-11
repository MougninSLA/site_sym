<?php

	$login = $_SESSION['login_result'];
	select_user($login);

	if (isset($_POST['maj'])) {
		
		#-------------------------------- Variables de mise à jour ----------------------------------#
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$entreprise=$_POST['entreprise'];
		$poste=$_POST['poste'];
		$adresse=$_POST['adresse'];
		$ville=$_POST['ville'];
		$pays=$_POST['pays'];
		$code_postal=$_POST['code_postal'];
		$a_propos=$_POST['a_propos'];
		#--------------------------------------------------------------------------------------------#

		update_users($login,$nom,$prenom,$email,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos);

		echo "<script language=\"javascript\">";
    	echo "alert('Votre profil a été mis à jour')";
    	echo "</script>";
    	header("Refresh:0");
    	$msg = "Votre profil a été mis à jour";

	}
	
?>