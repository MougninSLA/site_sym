<?php
$id_blacklist = $_POST['id_blacklist'];

del_blacklist($id_blacklist);

$msg = "<h3 style='color:green'>Le blacklist choisi a bien été supprimer</h3>";
include("./controller/controller_admin_blacklists.php");

?>