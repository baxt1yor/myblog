<?php

include 'connect.php';

if (!empty($_GET['key'])) {
	 $key = $_GET['key'];
        $key = '%'.trim($key).'%';
        // $query = $connection->query('SELECT * FROM `news` WHERE `title` LIKE "%'.$key.'%"');
        // $data = $query->fetchAll();

        $query = $connect->prepare("SELECT * FROM `xabarlar` 
                            WHERE `news` LIKE :key 
                            OR `short_m` LIKE :key 
                            OR `long_m` LIKE :key 
                            ORDER BY `id` DESC
                            LIMIT 3");

        $query->execute([':key' => $key]);
                
        $items = $query->fetchAll();
}

 
?>