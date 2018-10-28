<?php 
$angka = 400.1;

// membulatkan angka
echo round($angka);
echo "<br>";

// metode random => rand(min,max)
// antara 5 dan 10 termasuk 5&10
echo "Ini adalah angka random 5-10 => ". rand(5,10);
echo "<br>";

//metode max => menampilkan anngka terbesar
echo "Angka terbesar adalah ".max(10,11,99,102,92);
 ?>