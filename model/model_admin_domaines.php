<?php

	function select_domaine($id_domain){
		global $bdd;
		$req = $bdd->query("SELECT * FROM domains JOIN users ON domains.id_createur = users.id_user WHERE id_domain = $id_domain AND affichage_domain = 1");
		$donnees = $req->fetch();
		
		return $donnees;
	}	
	
	function check_domain(){
		global $bdd;
		$req = $bdd->query("SELECT * FROM domains");
		// $donnees = $req->fetch();
		
		return $req;
	}
	
	/*function update_domain($nom_domaine,$ip,$pays,$ville,$id_domain){
		global $bdd;
		
		$req = $bdd->query("UPDATE domains SET nom_domain = '$nom_domaine', adresse_ip = '$ip', pays_domain = '$pays', ville_domain = '$ville' WHERE id_domain = '$id_domain'");
		$req->closeCursor();
	}*/
	
	/*function del_domain($id_domain){
		global $bdd;
		
		$req = $bdd->prepare("DELETE FROM domains WHERE id_domain = :id_domain");
		$req->execute(array(
							'id_domain'=>$id_domain));
		
		$req->closeCursor();
	}*/
?>