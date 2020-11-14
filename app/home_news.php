<?php
	include 'connect.php';
	$query = $connect
			 ->query("SELECT * FROM `xabarlar` ORDER BY `id` DESC  LIMIT 3");
	$data=$query->fetchAll();

?>