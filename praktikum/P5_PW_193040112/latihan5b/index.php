<?php 
	//menghubungkan dengan file php lainnya
	require 'php/functions.php';

	//melakukan query
	$makanan = query("SELECT * FROM makanan")
	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 5b</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<table cellpadding="10" cellspacing="0" border="1">
		<tr>
			<th>NO</th>
			<th>Foto</th>
			<th>Nama Makanan</th>
			<th>Asal Makanan</th>
			<th>Tahun Dibuat</th>
			<th>Bahan Utama</th>
		</tr>
		<?php $i = 1 ?>
		<?php foreach ($makanan as $mkn) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><img src="assets/img/<?= $mkn["img"]; ?>"></td>
				<td><?= $mkn["nama_makanan"] ?></td>
				<td><?= $mkn["asal_makanan"] ?></td>
				<td><?= $mkn["tahun_dibuat"] ?></td>
				<td><?= $mkn["bahan_utama"] ?></td>
			</tr>
			<?php $i++ ?>
			<?php endforeach; ?>
	</table>
</body>
</html>