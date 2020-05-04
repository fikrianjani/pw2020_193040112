<?php 
	//mengecek apakah ada id yang dikirimkan
	//jika tidak maka akan dikembalikan ke halaman index.php 
	if (!isset($_GET['id'])) {
		header("location: ../index.php");
		exit;
	}

	require 'functions.php';

	//mengambil id dari dari url
	$id = $_GET['id'];

	//melakukan query dengan parameter id yang diambil dari url
	$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Detail Makanan</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<div class="container">
		<div class="gambar">
			<img class="gambar" src="../assets/img/<?= $makanan['img']; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $makanan['nama_makanan']; ?></p>
			<p><?= $makanan['asal_makanan']; ?></p>
			<p><?= $makanan['tahun_dibuat']; ?></p>
			<p><?= $makanan['bahan_utama']; ?></p>
		</div>
		<button class="tombol-kembali"><a class="a" href="../index.php">Kembali</a></button>
	</div>
</body>
</html>