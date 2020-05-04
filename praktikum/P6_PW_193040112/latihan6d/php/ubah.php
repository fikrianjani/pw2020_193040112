<?php 
require 'functions.php';

$id = $_GET['id'];
$mkn= query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
 	if(ubah($_POST) > 0) {
 		echo "<script>
 					alert('Data berhasil diubah!');
 					document.location.href = 'admin.php;
 				</script>";
 	} else {
 		echo "<script>
 					alert('Data gagal diubah!');
 					document.location.href = 'admin.php;
 				</script>";
 	}
 } ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Data</title>
</head>
<body>
	<h3>Form Ubah Data Mahasiswa</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for ="img">Pilih Foto Makanan :</label><br>
				<input type="hidden" name="id" id="id" value="<? $mkn['id']; ?>">
				<input type="file" name="img" id="img" value="<?= $mkn['img']; ?>"><br><br>
			</li>
			<li>
				<label for ="namamkn">Nama Makanan :</label><br>
				<input type="hidden" name="id" id="id" value="<? $mkn['id']; ?>">
				<input type="text" name="namamkn" id="namamkn" required value="<?= $mkn['nama_makanan']; ?>"><br><br>
			</li>
			<li>
				<input type="hidden" name="id" id="id" value="<? $mkn['id']; ?>">
				<label for ="asalmkn">Asal Makanan :</label><br>
				<input type="text" name="asalmkn" id="asalmkn" required value="<?= $mkn['asal_makanan']; ?>"><br><br>
			</li>
			<li>
				<label for ="thn">Tahun Dibuat :</label><br>
				<input type="hidden" name="id" id="id" value="<? $mkn['id']; ?>">
				<input type="text" name="thn" id="thn" required value="<?= $mkn['tahun_dibuat']; ?>"><br><br>
			</li>
			<li>
				<label for ="bhn">Bahan Utama :</label><br>
				<input type="hidden" name="id" id="id" value="<? $mkn['id']; ?>">
				<input type="text" name="bhnmkn" id="bhnmkn" required value="<?= $mkn['bahan_utama']; ?>"><br><br>
			</li>
			<br>
			<button type="submit" name="ubah">Ubah Data</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
</body>
</html>