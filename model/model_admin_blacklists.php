<?php
	function select_blackliste($id_blacklist){
		global $bdd;
		$req = $bdd->query("SELECT * FROM blacklists JOIN users ON blacklists.id_createur = users.id_user WHERE id_blacklist = $id_blacklist AND affichage_blacklist = 2");
		$donnees = $req->fetch();
		
		return $donnees;
	}

?>