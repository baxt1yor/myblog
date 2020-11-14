
<div class="container text-center">
    <ul class="pagination">
        <li class="page-header"><a class="page-link"  href="index.php?id=<?=$previous;?>" aria-label = "Previous"><span aria-hidden = "true"><b><<</b></span></a></li>
<?php for($index = 1; $index <= $pages; $index++): ?>
        <li class="page-header"><a class="page-link"  href="index.php?page=<?=$index?>"><?=$index?></a></li>    
<?php endfor; ?>
        <li class="page-header">
            <a href="index.php?id=<?= $next; ?>" class="page-link" aria-label = "Next"><span aria-hidden="true"><b>>></b></span></a>
        </li>
    </ul>
</div>    
<div>
	<footer class="text-center">
		Mualliflik huquqi himoyalangan &copy; <?php date('Y'); ?>
	</footer>
</div>	
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>