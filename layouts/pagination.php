<?php
   include '../app/connect.php';
  
      $limit = 3;
   
   	$page = $_GET['id'];
   	$start = ($page - 1) * $limit;
   	
   	$result = $connect->query("SELECT * FROM `xabarlar` LIMIT $start, $limit");
   	$custs = $result->fechAll();

   	$result1 = $connect->query("SELECT COUNT(id) AS id  FROM `xabarlar`");
   	$custCount = $result1->fetchAll();
   	$total = $custCount[0]['id'];
   	$pages = ceil($total / $limit);

   	$previous = $page - 1;
   	$next = $page + 1;
   
?>