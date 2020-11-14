<?php
	
	include 'app/search.php';

?>

<?php include 'layouts/headr.php' ?>
<h4 class="text-center " style="font-family: monospace;">Qidiruv natijalari</h4>

<?php if (empty($key)): ?>
    <div class="alert alert-danger text-center">
        Siz kalit yozmadingiz!
    </div>
<?php elseif (count($items) == 0):?>
    <div class="alert alert-danger text-center">
        Natija topilmadi!
    </div>
<?php else:?>
	<div class="text-center">
    <?php foreach ($items as $item): ?>
        <h3><?= $item['news']; ?></h3>
        <p><?= $item['short_m']; ?></p>
    <?php endforeach; ?>
<?php endif; ?>
</div>
