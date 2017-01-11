<?php
	//-------------------------------------------------------------------------------------------------------------
	//Fonction qui verifie si un compte existe
	function compte($login)
	{

	    global $bdd;

	    //REQUETE SUR LA BASE DE DONNEES
	    $connection = 'SELECT * FROM users';

	    try {
	        $requete = $bdd->query($connection);
	        while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

	            if ($login === $datas['login']) {
	                $testLog = "true";
	                break;

	            } elseif ($login !== $datas['login']) {
	                $testLog = "false";
	                
	            } else {
	                $testLog = "false";
	                break;
	            }
	        }
	    } catch (PDOException $error) {
	        echo "<script language=\"javascript\">";
	        echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
	        echo "</script>";
	    }

	    return $testLog;
	}
	//-------------------------------------------------------------------------------------------------------------


	//-------------------------------------------------------------------------------------------------------------
	//Fonction qui verifie si un domaine existe
	function domain($adresse)
	{

	    global $bdd;

	    //REQUETE SUR LA BASE DE DONNEES
	    $connection = 'SELECT * FROM domains';

	    try {
	        $requete = $bdd->query($connection);
	        while ($datas = $requete->fetch(PDO::FETCH_ASSOC)) {

	            if ($adresse === $datas['adresse_ip']) {
	                $testLog = "true";
	                break;

	            } elseif ($adresse !== $datas['adresse_ip']) {
	                $testLog = "false";
	                
	            } else {
	                $testLog = "false";
	                break;
	            }
	        }
	    } catch (PDOException $error) {
	        echo "<script language=\"javascript\">";
	        echo "alert('ERREUR DE CONNECTION A LA BASE DE DONNEES')";
	        echo "</script>";
	    }

	    return $testLog;
	}
	//-------------------------------------------------------------------------------------------------------------


	//-------------------------------------------------------------------------------------------------------------
	//Fonction qui retrouve un compte
	function select_user($login)
	{
		global $bdd;

		$req = $bdd->prepare("SELECT * FROM users WHERE users.login = :login");

		$req->execute(array("login"=>$login));

		while($results = $req->fetch()){

			$_SESSION['id_user_result'] = $results["id_user"];
			$_SESSION['nom_result']= $results["nom"];
			$_SESSION['prenom_result'] = $results["prenom"];
			$_SESSION['login_result'] = $results["login"];
			$_SESSION['mail_result'] = $results["mail"];
			$_SESSION['mdp_result']= $results["mdp"];
			$_SESSION['entreprise_result']= $results["entreprise"];
			$_SESSION['poste_result']= $results["poste"];
			$_SESSION['adresse_result']= $results["adresse"];
			$_SESSION['ville_result']= $results["ville"];
			$_SESSION['pays_result']= $results["pays"];
			$_SESSION['code_postal_result']= $results["code_postal"];
			$_SESSION['a_propos_result']= $results["a_propos"];
			$_SESSION['photo_result']= $results["photo"];
			$_SESSION['affichage_result']= $results["affichage"];
		}
		
		$req->closeCursor();
	}
	//-------------------------------------------------------------------------------------------------------------


	//-------------------------------------------------------------------------------------------------------------
	//Fonction pour ajouter un utilisateur dans notre BDD:*
/*	function add_user($nom,$prenom,$login,$mail,$mdp)
	{
		global $bdd;

		//REQUETE SUR LA BASE DE DONNEES
		$req = $bdd->prepare("INSERT INTO `users` (`nom`,`prenom`,`login`,`mail`,`mdp`,`affichage`) values (:nom,:prenom,:login,:mail,:mdp,1);");
		$req->execute(array(
							'nom'=>$nom,
							'prenom'=>$prenom,
							'login'=>$login,
							'mail'=>$mail,
							'mdp'=>$mdp
							));
		$req->closeCursor();
	
	} */
	//-------------------------------------------------------------------------------------------------------------


	//-------------------------------------------------------------------------------------------------------------
	//Fonction pour supprimer un utilisateur de notre BDD
	function del_user($login)
	{
		global $bdd;

		//REQUETE SUR LA BASE DE DONNEES
		$req = $bdd->prepare("DELETE users FROM users WHERE users.login = :login");

		$req->execute(array(
							'login'=>$login));		
		$req->closeCursor();
	}
	//-------------------------------------------------------------------------------------------------------------


	//-------------------------------------------------------------------------------------------------------------
	//Fonction pour ajouter un domaine dans notre BDD
	function add_domain($nom,$adresse,$pays,$ville,$createur)
	{
		global $bdd;

		//REQUETE SUR LA BASE DE DONNEES
		$req = $bdd->prepare("INSERT INTO `domains` (`nom_domain`,`adresse_ip`,`pays_domain`,`ville_domain`,`id_createur`,`affichage_domain`) values (:nom,:adresse,:pays,:ville,:createur,1);");
		$req->execute(array(
							'nom'=>$nom,
							'adresse'=>$adresse,
							'pays'=>$pays,
							'ville'=>$ville,
							'createur'=>$createur
							));
		$req->closeCursor();
	
	}
	//-------------------------------------------------------------------------------------------------------------


	//-------------------------------------------------------------------------------------------------------------
	//Mis à jour des utilisateurs
	function update_users($login,$nom,$prenom,$email,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos)
	{
		global $bdd;

		$req = $bdd->query("UPDATE users SET nom='$nom', prenom='$prenom', mail='$email', entreprise='$entreprise', poste='$poste', adresse='$adresse', ville='$ville', pays='$pays', code_postal='$code_postal', a_propos='$a_propos' WHERE login='$login'");

		$req->closeCursor();
	}
	//-------------------------------------------------------------------------------------------------------------


	//--------------------------------------------------------------------------------------------------------------
	//Fonction pour la deconnecttion
	function deconnexion()
	{
		session_destroy();
		header('Location: ?index=index');
	}
	//-------------------------------------------------------------------------------------------------------------


?>