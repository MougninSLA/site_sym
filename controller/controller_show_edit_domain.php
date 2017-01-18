<?php
	
	$id_domain = $_GET['Id'];
	$select_domain = select_domaine($id_domain);
	
   include("./view/edit_domain.php");	

?>