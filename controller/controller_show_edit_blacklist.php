<?php
	
	$id_blacklist = $_GET['Id'];
	$select_blacklist = select_blackliste($id_blacklist);
	
   include("./view/view_edit_blacklist.php");	

?>