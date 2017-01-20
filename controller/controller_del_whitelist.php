<?php

$id_whitelist = $_POST['id_whitelist'];

del_whitelist($id_whitelist);

$msg = "<h3 style='color:green'>La whitelist choisi a bien été supprimé</h3>";
include("./controller/controller_admin_whitelists.php");
?>