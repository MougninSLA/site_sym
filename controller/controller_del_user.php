<?php

$id_user = $_POST['id_user'];

del_user($id_user);
del_user_domain($id_user);
del_user_blacklist($id_user);
del_user_whitelist($id_user);

$msg = "<h3 style='color:green'>L'utilisateur choisi a bien été supprimé, ainsi que le(s) domaine(s), blacklist, whitelist qui l'a crée</h3>";
include("./controller/controller_admin_users.php");
?>