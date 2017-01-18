<?php

$nom_blacklist = $_POST['nom_blacklist'];
$ip = $_POST['adresse_blacklist'];
$pays = $_POST['pays_blacklist'];
$ville = $_POST['ville_blacklist'];
$id_blacklist = $_POST['modifier'];

update_blacklist($nom_blacklist,$ip,$pays,$ville,$id_blacklist);

$msg = "<h3 style='color:green'>Le blacklist choisi a bien été modifier</h3>";
include("./controller/controller_admin_blacklists.php");

?>