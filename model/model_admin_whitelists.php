<?php
	function select_whiteliste($id_whitelist){
		global $bdd;
		$req = $bdd->query("SELECT * FROM whitelists JOIN users ON whitelists.id_createur = users.id_user WHERE id_whitelist = $id_whitelist AND affichage_whitelist = 2");
		$donnees = $req->fetch();
		
		return $donnees;
	}

?>