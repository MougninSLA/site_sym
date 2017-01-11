<?php

$id_user = $_POST['id_user'];

del_domain($id_domain);

$msg = "<h3 style='color:green'>L'utilisateur choisi a bien été supprimer</h3>";
include("./controller/controller_admin_users.php");
?>