<?php 
$mahasiswa = [
	["Ali","E41170849","TIF","ali@gmail.com"],
	["Dani","E8999212","TKK","dani@gmail.com"],
	["Kika","E536123","MIF","dani@gmail.com"]

];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs): ?>
		
	<ul>
		<li>Nama : <?= $mhs[0]?></li>
		<li>NIM : <?= $mhs[1]?></li>
		<li>Jurusan : <?= $mhs[2]?></li>
		<li>Email : <?= $mhs[3]?></li>
	</ul>
	<?php endforeach ?>

</body>
</html>