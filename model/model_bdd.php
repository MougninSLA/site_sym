<?php
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=sym;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die("ERREUR : ".$e->getMessage());
	}
?>