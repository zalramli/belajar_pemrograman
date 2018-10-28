<?php 
$txt = "Halo Selamat Datang";
echo $txt;
echo "<br>";
// menghitung jumlah huruf termasuk spasi
echo strlen($txt);
echo "<br>";

// menghitung jumlah kata
echo str_word_count($txt);
echo "<br>";

echo str_replace("Hai", "Halo", $txt);
echo "<br>";

echo str_repeat("Hai ", 10);
 ?> 