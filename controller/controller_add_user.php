<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$mail = $_POST['mail'];

$compte = compte($login);

if($compte == "false"){
	add_user_admin($nom,$prenom,$login,$mail,$mdp,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos);
	$msg = "<h3 style='color:green'>L'utilisateur $login a bien été ajouté</h3>";
}
else{
	$msg = "<h3 style='color:red'>Le login $login n'est pas disponible</h3>";
}
include("./controller/controller_admin_users.php");

?>