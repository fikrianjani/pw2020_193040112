<?php 
require 'functions.php';
$makanan = query("SELECT * FROM makanan"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<div class="add">
		<a href="tambah.php"><button>Tambah Data</button></a>
	</div><br>
	<table class="tabel" border="1" cellpadding="13" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Opsi</th>
			<th>Foto</th>
			<th>Nama Makanan</th>
			<th>Asal Makanan</th>
			<th>Tahun Dibuat</th>
			<th>Bahan Utama</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($makanan as $mkn) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href=""><button>Ubah</button></a>
					<a href=""><button>Hapus</button></a>
				</td>
				<td><img class="gambar" src="../assets/img/<?= $mkn['img']; ?>" alt=""></td>
				<td><?= $mkn['nama_makanan']; ?></td>
				<td><?= $mkn['asal_makanan']; ?></td>
				<td><?= $mkn['tahun_dibuat']; ?></td>
				<td><?= $mkn['bahan_utama']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>