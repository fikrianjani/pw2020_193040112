<?php 
session_start();

if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

if(isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$makanan = query("SELECT * FROM makanan WHERE 
				nama_makanan LIKE '%$keyword%' OR
				asal_makanan LIKE '%$keyword%' OR
				tahun_dibuat LIKE '%$keyword%' OR
				bahan_utama LIKE '%$keyword%' ");
} else {
	$makanan = query("SELECT * FROM makanan");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="add">
		<a href="tambah.php"><button>Tambah Data</button></a>
	</div><br>
	<form action="" method="get">
		<input type="text" name="keyword" autofocus>
		<button type="submit" name="cari">Cari!</button>
	</form>
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
		<?php if (empty($makanan)) :?>
	<tr>
		<td colspan="7">
			<h1>Data Tidak Ditemukan</h1>
		</td>
	</tr>
	<?php else : ?>
		<?php $i = 1; ?>
		<?php foreach ($makanan as $mkn) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $mkn['id'] ?>"><button>Ubah</button></a>
					<a href="hapus.php?id=<?= $mkn['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
				</td>
				<td><img class="gambar" src="../assets/img/<?= $mkn['img']; ?>" alt=""></td>
				<td><?= $mkn['nama_makanan']; ?></td>
				<td><?= $mkn['asal_makanan']; ?></td>
				<td><?= $mkn['tahun_dibuat']; ?></td>
				<td><?= $mkn['bahan_utama']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php endif; ?>
	</table>
	<br><br>
	<div class="logout">
		<button><a href="logout.php">Logout</a></button>
	</div>

</body>
</html>