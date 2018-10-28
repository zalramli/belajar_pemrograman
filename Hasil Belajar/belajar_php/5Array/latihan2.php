<?php 
$angka = [9,18,12,24,47,43,50,10];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.kotak {
			height: 50px;
			width: 50px;
			background-color:salmon;
			text-align: center;
			line-height: 50px; 
			margin: 3px;
			float: left;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<!-- FOR -->
	<?php for ($i=0; $i<count($angka); $i++) : ?>
	<div class="kotak">
		<?= $angka[$i] ?>
	</div>
	<?php endfor ?>

	<!-- FOREACH  -->
	<div class="clear"></div>
	<?php foreach($angka as $data): ?>
		<div class="kotak"><?= $data ?> </div>
	<?php endforeach ?>
</body>
</html>