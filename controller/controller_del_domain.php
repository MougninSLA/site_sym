<?php

$id_domain = $_POST['id_domain'];

del_domain($id_domain);

$msg = "<h3 style='color:green'>Le domaine choisi a bien été supprimer</h3>";
include("./controller/controller_admin_domaines.php");
?>