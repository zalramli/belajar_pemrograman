<h1 style="padding-left: 115px">Data Siswa</h1><br>
<center><table border="1" width="80%">
	<thead>
	<tr>
		<th style="background-color: #d63031; color: white;">ID</th>
		<th style="background-color: #d63031; color: white;">Nama</th>
		<th style="background-color: #d63031; color: white;">Kelas</th>
		<th style="background-color: #d63031; color: white;">Alamat</th>
		<th style="background-color: #d63031; color: white;">Email</th>	
	</tr>
	</thead>
	<tbody>
		<?php
		$query = mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY id");
		foreach ($query as $data ) {
		 ?>
	<tr>
		<td style="text-align: center"><?php echo $data['id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['kelas']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><?php echo $data['no_hp']; ?></td>
	</tr>
		<?php } ?>
	</tbody>
</table></center>