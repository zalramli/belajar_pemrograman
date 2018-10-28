<?php 
	echo date("l,d-m-Y");
	echo "<br>";

	 //detik sejak tggl 1 Jan 1970
	echo time();
	echo "<br>";

	 //Menghitung 5 hari ke depan
	echo date("d M Y",time()+60*60*24*5);
	echo "<br>";

	// mktime => membuat detik sendiri
	// mktime(0,0,0,0,0,0)
	// jam,menit,detik,bulan,tanggal,tahun
	//mendapatkan hari ulang tahun
	echo date("l",mktime(0,0,0,11,12,1998));
	echo "<br>";

	// ubah tanggal menjadi detik
	echo date("l",strtotime("12 Nov 1998"));
?>