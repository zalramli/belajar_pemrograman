<?php 
$x = 10;
function tampilX(){
	global $x;
	echo $x;
}
tampilX();
echo "<br>";
// method GET
// $_GET["nama"] = "Rixal";
// $_GET['umur'] = 12;

$mahasiswa = [
	[
		"nama" => "Dani",
		"umur" => 18,
		"alamat" => "bangsal"
	],
	[
		"nama" => "Iyek",
		"umur" => 20,
		"alamat" => "Yosowilangun"
	]
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php foreach ($mahasiswa as $mhs): ?>
 		
 	<ul>
 		<li>
 			<a href="latihan2.php?x=<?= $mhs['nama'] ?>&y=<?= $mhs['umur']?>&z=<?= $mhs['alamat'] ?>"><?= $mhs['nama'] ?></a> 	
		</li>
 	</ul>
 	<?php endforeach ?>
 
 </body>
 </html>
