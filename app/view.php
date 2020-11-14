<?php
include 'connect.php';
	$col = $_GET['id'];
		$pdo =$connect->query("SELECT `view`, `news`, `short_m`, `long_m` FROM `xabarlar` WHERE `id`=".$col);
		
		$c=$connect->query("UPDATE `xabarlar` SET `view`= `view`+1 WHERE `id`=".$col);	
	    $longg=$c->fetch();

	    $single = $connect->query("SELECT * FROM `xabarlar` WHERE `id`=".$col);
        $longg=$single->fetch();


?>