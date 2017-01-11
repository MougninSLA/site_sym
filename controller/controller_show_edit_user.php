<?php
	
	$id_user = $_GET['Id'];
	$select_show_user = select_show_user($id_user);
	
   include("./view/view_show_edit_user.php");	

?>