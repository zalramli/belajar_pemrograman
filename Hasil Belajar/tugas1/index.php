<html>
	<head>
		<title>hello</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<table border="3" width="100%" height="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td style="background-image: url('img/batik.jpg');" colspan="2" height="10%">
					<table>
						<tr>
							<td><img width=50px" height="50px" src="img/Polije.png" alt=""> </td>
							<td><h2 style="text-shadow: 1px 1px white; color:white; margin-top: 20px;">Politeknik Negeri Jember</h2></td>
						</tr>
					</table>
				</td>
			</tr>	
			<tr>
				<td valign="top" style="background-color: #ff7675;" width="15%" height="80%">
					<ul>
					  <li class="<?php if(!isset($_GET['halaman'])){echo 'active';}?>"><a href="index.php">Home</a></li>
					  <li class="<?php if($_GET['halaman']=='siswa'){echo 'active';}?>"><a href="?halaman=siswa">Siswa</a></li>
					  <li class="<?php if($_GET['halaman']=='dosen'){echo 'active';}?>"><a href="?halaman=dosen">Dosen</a></li>
					</ul>
				</td>
				<td valign="top" width="80%" height="80%"><br>
					<h1 style="text-align: center;"><?php if(!isset($_GET['halaman'])){echo 'SELAMAT DATANG :) ';}?></h1>
						<?php
						  error_reporting(0);
						  include 'koneksi/connect.php';
			              if($_GET['halaman']){
			              include 'halaman/'.$_GET['halaman'].'.php';
			              }
			            ?>
				</td>
			</tr>
			<tr>
				<td style="background-color: #d63031;" colspan="2" height="5%">
					<p style="text-align: center; color: white">@copyright 2018</p>
				</td>
			</tr>
		</table>
	</body>
</html>