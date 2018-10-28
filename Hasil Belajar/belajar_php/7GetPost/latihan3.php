<?php
if (isset($_POST['simpan'])) {
	if ($_POST['username'] == "admin" && $_POST['password']== "123" ) {
		header("location:latihan4.php");
		exit();
	} else {
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (isset($error)): ?>
		
	<p>Gagal Login</p>
	<?php endif ?>
	<ul>
	<form action="" method="POST">	
		<li>
			<label for="username">Username</label>
			<input type="text" name="username" id="username"><br>
			
		</li>
		<li>
			<label for="pass">Password</label>
			<input type="password" name="password" id="pass"><br>
		</li>
		<li>
			<button type="submit" name="simpan">SIMPAN</button>
		</li>
	</form>

	</ul>

</body>
</html>