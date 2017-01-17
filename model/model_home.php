<?php
	if(isset($_POST['connexion'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$login=$_POST['pseudo'];
		$mdp=$_POST['password'];
		#-----------------------------------------------------------------------------------------#

		$existe = compte($login);
		
		if($existe == "true"){
			
			select_user($login);

			if ($_SESSION['login_result'] == "$login" && $_SESSION['mdp_result'] == "$mdp") {
					
					if ($_SESSION['login_result'] == "administrator") {
						header('Location: ?index=view_admin_index');
					} else {
						header('Location: ?index=view_dashboard');
					}

			} else {
				echo "<script language=\"javascript\">";
	        	echo "alert('Désolé, vous n\'avez pas le droit de vous connecter à ce site')";
	        	echo "</script>";
	        	header('Location: ?index');
			}
			exit();

		} elseif ($existe == "false") {
			echo "<script language=\"javascript\">";
	        echo "alert('Désolé, vous n\'avez pas le droit de vous connecter à ce site')";
	        echo "</script>";
	        header('Location: ?index');

		} else {
			echo "<script language=\"javascript\">";
	        echo "alert('Désolé, vous n\'avez pas le droit de vous connecter à ce site')";
	        echo "</script>";
	        header('Location: ?index');
		}
	}

	if(isset($_POST['confirmer'])) {

		#-------------------------------- Variables de conexion ----------------------------------#
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$login=$_POST['login'];
		$mail=$_POST['mail'];
		$mdp=$_POST['mdp'];
		$mdp2=$_POST['mdp2'];
		#-----------------------------------------------------------------------------------------#

		$existe = compte($login);
		
		if ($mdp == $mdp2) {
			if($existe == "true"){
				echo "<script language=\"javascript\">";
	        	echo "alert('Cet utilisateur est déjà inscrit')";
	        	echo "</script>";
			} elseif ($existe == "false") {
				add_user($nom,$prenom,$login,$mail,$mdp);
				echo "<script language=\"javascript\">";
	        	echo "alert('Utilisateur créé')";
	        	echo "</script>";
			} else {
				add_user($nom,$prenom,$login,$mail,$mdp);
				echo "<script language=\"javascript\">";
	        	echo "alert('Utilisateur créé')";
	        	echo "</script>";
			}
		} else {
			echo "<script language=\"javascript\">";
	       echo "alert('Mots de passe différents')";
	       echo "</script>";
		}
	}

	if (isset($_POST['envoyer_message'])) {
		send_message();
	}
?>