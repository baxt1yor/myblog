<?php
    
    include 'connect.php';

    $sql = 'SELECT COUNT(*) AS `news` FROM `xabarlar`';

    $limit = 3;
    $count = $connect->query($sql)->fetch();
    //echo $count['news']; exit;
    $pages = ceil($count['news'] / $limit);
    
    $offset = 1;
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        $offset = ($page - 1) * $limit;
    }

    $query = $connect
    ->query('SELECT * FROM `xabarlar` ORDER BY `id` DESC LIMIT '.$limit.' OFFSET '.$offset);

    $items = $query->fetchAll();

    // $previous = $page - 1;
    // $next = $page + 1;
?>