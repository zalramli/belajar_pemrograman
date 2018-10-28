<?php 
$mahasiswa = [
	["Dani","TIF","E3123124","Dani@gmail.com"],
	["Kika","TIF","E3123124","Dani@gmail.com"],
	["Ali","TIF","E3123124","Dani@gmail.com"]
];

// assosiative
$siswa = [
	[
		"nama" => "Aisyha Kamila", 
		"umur" => 18,
		"tugas" => [90,80,100]
	],
	[
		"nama" => "Afri",
		"umur" => 20,
		"tugas" => [87,70,98]

	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<?php foreach ($siswa as $mhs): ?>
		
	<ul>
		<li>Nama : <?= $mhs['nama'] ?></li>
		<li>Umur : <?= $mhs['umur'] ?></li>
		<li>Nilai : <?= $mhs['tugas'][0].",".$mhs['tugas'][1].",".$mhs['tugas'][2] ?></li>
	</ul>
	<?php endforeach ?>

</body>
</html>