<?php

$id_domain = $_POST['id_domain'];
$select_domaine = select_domaine($id_domain);

$nom_domain = $select_domaine['nom_domain'];
$ip = $select_domaine['adresse_ip'];
del_domain($id_domain);

exec('sudo /var/www/scripts/del_domain_relay.sh '.$nom_domain.' '.$ip);
$msg = "<h3 style='color:green'>Le domaine choisi a bien été supprimer</h3>";
include("./controller/controller_admin_domaines.php");
?>