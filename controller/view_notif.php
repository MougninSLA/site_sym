<?php
	view_notif($_SESSION['id_notif_admin']);
	$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
	header('Location: ' . $referer);
?>