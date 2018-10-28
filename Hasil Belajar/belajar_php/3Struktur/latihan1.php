<?php 
// Pengulangan
// for
for ($a=0; $a < 5 ; $a++) { 
	echo "For";
}
echo "<br>";

// while
$b =0;
while($b < 5){
	echo "While";
$b++;
}
echo "<br>";

// do while
$c = 0;
do {
	echo "Do while";
$c++;
} while ($c < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.warna-baris{
			background-color :silver;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i=0; $i < 5 ; $i++) : ?>
			<?php if ($i % 2 == 0): ?>
				<tr class="warna-baris">
				<?php else: ?>
					<tr>
			<?php endif ?>
			
				<?php for ($j=0; $j < 5 ; $j++) : ?>
					<td><?= "$i,$j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
	
</body>
</html>