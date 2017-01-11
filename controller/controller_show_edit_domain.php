<?php
	
	$id_domain = $_GET['Id'];
	$select_domain = select_domain($id_domain);
	
   include("./view/edit_conf.php");	

?>