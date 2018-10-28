<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	.kotak{
		width: 50px;
		height: 50px;
		line-height: 50px;
		margin: 3px;
		background-color: salmon;
		text-align: center;
		transition: 1s;
		float: left;
	}
	.kotak:hover{
		transform: rotate(360deg);
		border-radius: 50px;

	}
	.clear{
		clear: both;
	}
</style>
</head>
<body>
	<?php 
	$angka = [[1,2,3],[4,4,6],[7,8,9]]; 
	 ?>
	<?php foreach ($angka as $key): ?>	 	
	<?php foreach ($key as $b): ?>
		
	<div class="kotak"><?= $b ?></div>
	<?php endforeach ?>
	<div class="clear"></div>
	<?php endforeach ?>

</body>
</html>