<?php

$nom_whitelist = $_POST['nom_whitelist'];
$ip = $_POST['adresse_whitelist'];
$pays = $_POST['pays_whitelist'];
$ville = $_POST['ville_whitelist'];
$id_whitelist = $_POST['modifier'];


update_whitelist($nom_whitelist,$ip,$pays,$ville,$id_whitelist);

$msg = "<h3 style='color:green'>La whitelist choisi a bien été modifié</h3>";
include("./controller/controller_admin_whitelists.php");

?>