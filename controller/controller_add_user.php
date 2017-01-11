<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$mail = $_POST['mail'];
$entreprise = $_POST['entreprise'];
$poste = $_POST['poste'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$code_postal = $_POST['code_postal'];
$a_propos = $_POST['a_propos'];

$compte = compte($login);

if($compte == "false"){
	add_user($nom,$prenom,$login,$mail,$mdp,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos);
	$msg = "<h3 style='color:green'>L'utilisateur $login a bien été ajouté</h3>";
}
else{
	$msg = "<h3 style='color:red'>Le login $login n'est pas disponible</h3>";
}
include("./controller/controller_admin_users.php");

?>