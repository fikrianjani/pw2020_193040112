<?php 
require 'functions.php';
if (isset($_POST['tambah'])) {
 	if(tambah($_POST) > 0) {
 		echo "<script>
 					alert('Data berhasil ditambahkan!');
 					document.location.href = '../admin.php;
 				</script>";
 	} else {
 		echo "<script>
 					alert('Data gagal ditambahkan!');
 					document.location.href = '../admin.php;
 				</script>";
 	}
 } ?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data</title>
</head>
<body>
	<h3>Form Tambah Data Mahasiswa</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for ="img">Pilih Foto Makanan :</label><br>
				<input type="file" name="img" id="img" required><br><br>
			</li>
			<li>
				<label for ="namamkn">Nama Makanan :</label><br>
				<input type="text" name="namamkn" id="namamkn" required><br><br>
			</li>
			<li>
				<label for ="asalmkn">Asal Makanan :</label><br>
				<input type="text" name="asalmkn" id="asalmkn" required><br><br>
			</li>
			<li>
				<label for ="thn">Tahun Dibuat :</label><br>
				<input type="text" name="thn" id="thn" required><br><br>
			</li>
			<li>
				<label for ="bhn">Bahan Utama :</label><br>
				<input type="text" name="bhnmkn" id="bhnmkn" required><br><br>
			</li>
			<br>
			<button type="submit" name="tambah">Tambah Data</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
</body>
</html>