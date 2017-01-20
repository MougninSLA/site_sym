<?php

$nom_domaine = $_POST['nom_domaine'];
$ip = $_POST['ip'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$id_domain = $_POST['modifier'];

update_domain($nom_domaine,$ip,$pays,$ville,$id_domain);

$msg = "<h3 style='color:green'>Le domaine choisi a bien été modifié</h3>";
include("./controller/controller_admin_domaines.php");

?>