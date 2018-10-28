<?php

function salam($waktu,$nama) {
	return "Selamat $waktu $nama";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?= salam("Pagi","Afri"); ?></h1>

</body>
</html>