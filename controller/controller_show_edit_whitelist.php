<?php
	
	$id_whitelist = $_GET['Id'];
	$select_whitelist = select_whiteliste($id_whitelist);
	
   include("./view/view_edit_whitelist.php");	

?>