<?php 
if (!isset($_GET['x']) ||
	!isset($_GET['y']) ||
	!isset($_GET['z'])
	 ) 
{
	header("location:latihan1.php");
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>detail mahasiwa</h2>
	<ul>
		<li><?= $_GET['x'] ?></li>
		<li><?= $_GET['y'] ?></li>
		<li><?= $_GET['z'] ?></li>
	</ul>

<a href="latihan1.php">Kembali</a>
</body>
</html>