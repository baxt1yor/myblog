<?php
include 'app/view.php';
?>
	<?php include'layouts/headr.php'; ?>
	<div class="row" style="background-color: #feee; font-size: 2em; width: 100%; height: 600px">
			<ul style="font-size: 15px;"><i class="glyphicon glyphicon-eye-open"><?=$longg['view']?></i></ul>
			<ul><i style="font-size: 14px;"><?=$longg['time']?></i></ul>
		<h3 class="text-center"><?=$longg['short_m']?></h3>
		<h3 class="text-center"><?=$longg['news']?></h3>
		<img style="height: 200px; width: 200px; border-radius: 5px; position: absolute;" src="<?=$longg['img_link']?>">
		<p style="text-align: center; position: absolute;margin-left: 200px; font-family: monospace;"><?=$longg['long_m']?></p>
		</div>
	<?php include 'layouts/footer.php'; ?>