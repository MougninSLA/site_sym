<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$mail = $_POST['mail'];
$entreprise = $_POST['entreprise'];
$poste = $_POST['poste'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$code_postal = $_POST['code_postal'];
$a_propos = $_POST['a_propos'];
$id_user = $_POST['modifier'];

update_user($nom,$prenom,$login,$mail,$entreprise,$poste,$adresse,$ville,$pays,$code_postal,$a_propos,$id_user);

$msg = "<h3 style='color:green'>L'utilisateur choisi a bien été modifier</h3>";
include("./controller/controller_admin_users.php");

?>