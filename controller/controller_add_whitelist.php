<?php

$nom_domaine = $_POST['nom_domaine'];
$ip = $_POST['ip'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$id_user = 0;

$blacklist = blacklist($ip);
$whitelist = whitelist($ip);

if($blacklist == "false" && $whitelist == "false"){
	add_admin_whitelist($nom_domaine,$ip,$pays,$ville,$id_user);
	$msg = "<h3 style='color:green'>Le whitelist $nom_domaine a bien été ajouté</h3>";
}
else if($blacklist == "true"){
	$msg = "<h3 style='color:red'>Le whitelist $nom_domaine existe dans blacklist</h3>";
}
else if($whitelist == "true"){
	$msg = "<h3 style='color:red'>Le whitelist $nom_domaine existe dans whitelist</h3>";
}

 include("./controller/controller_admin_whitelists.php");
?>