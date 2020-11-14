<?php
	
	include '../app/connect.php';
	
	$query = $connect->query("SELECT * FROM `foydalanuvchi_xabari`");

	$mess = $query->fetchAll();

?>