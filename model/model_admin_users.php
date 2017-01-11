<?php

	function select_show_user($id_user){
		global $bdd;
		$req = $bdd->query("SELECT * FROM users WHERE id_user = $id_user");
		$donnees = $req->fetch();
		
		return $donnees;
	}

	function update_user($nom,$prenom,$login,$mail,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos,$id_user){
		global $bdd;
		
		$req = $bdd->query("UPDATE users SET nom = '$nom', prenom = '$prenom', login = '$login', mail = '$mail', entreprise = '$entreprise', poste = '$poste', adresse = '$adresse', ville = '$ville', pays = '$pays', code_postal = '$code_postal', a_propos = '$a_propos' WHERE id_user = '$id_user'");
		$req->closeCursor();
	}	
	
	function add_user($nom,$prenom,$login,$mail,$mdp,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos){
		global $bdd;
		
		$req = $bdd->prepare("INSERT INTO `users` (`nom`, `prenom`, `login`, `mail`, `mdp`, `entreprise`, `poste`, `adresse`, `ville`, `pays`, `code_postal`, `a_propos`) values (:nom,:prenom,:login,:mail,:mdp,:entreprise,:poste,:adresse,:ville,:pays,:code_postal,:a_propos);");
		$req->execute(array(
							'nom'=>$nom,
							'prenom'=>$prenom,
							'login'=>$login,
							'mail'=>$mail,
							'mdp'=>$mdp,
							'entreprise'=>$entreprise,
							'poste'=>$poste,
							'adresse'=>$adresse,
							'ville'=>$ville,
							'pays'=>$pays,
							'code_postal'=>$code_postal,
							'a_propos'=>$a_propos));
		$req->closeCursor();
	}

?>