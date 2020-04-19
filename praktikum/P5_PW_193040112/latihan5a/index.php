<?php 
	//melakukan koneksi ke database
	$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

	//memilih database
	mysqli_select_db($conn, "pw_193040112") or die ("Database Salah!");

	//query menjadi objek dari tabel didalam database
	$result = mysqli_query($conn, "SELECT * FROM makanan")

	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 5a</title>
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
		<?php while($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><img src="assets/img/<?= $row["img"]; ?>"></td>
				<td><?= $row["nama_makanan"] ?></td>
				<td><?= $row["asal_makanan"] ?></td>
				<td><?= $row["tahun_dibuat"] ?></td>
				<td><?= $row["bahan_utama"] ?></td>
			</tr>
			<?php $i++ ?>
			<?php endwhile; ?>
	</table>
</body>
</html>