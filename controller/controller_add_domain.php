<?php

$nom_domaine = $_POST['nom_domaine'];
$ip = $_POST['ip'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$id_user = $_POST['id_user'];

$check_domain = check_domain();

$verif = "false";
$verif_ip = "false";
while($donnees = $check_domain->fetch()){
		if($donnees['nom_domain'] == $nom_domaine){
			$verif = "true";
		}
		if($donnees['adresse_ip'] == $ip){
			$verif_ip = "true";
		}
}


if($verif == "false" && $verif_ip == "false"){
	add_admin_domain($nom_domaine,$ip,$pays,$ville,$id_user);
	$msg = "<h3 style='color:green'>Le domaine $nom_domaine a bien été ajouté</h3>";
}
else if($verif == "true"){
	$msg = "<h3 style='color:red'>Le domaine $nom_domaine n'est pas disponible</h3>";
}
else if($verif_ip == "true"){
	$msg = "<h3 style='color:red'>L'adresse $ip n'est pas disponible</h3>";
}

include("./controller/controller_admin_domaines.php");


// add_domain($nom_domaine,$ip,$pays,$ville,$id_user);

/*if($compte == "false"){
	add_user($nom,$prenom,$login,$mail,$mdp,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos);
	$msg = "<h3 style='color:green'>L'utilisateur $login a bien été ajouté</h3>";
}
else{
	$msg = "<h3 style='color:red'>Le login $login n'est pas disponible</h3>";
}
include("./controller/controller_admin_users.php");
*/
?>