<?php 
session_start();

if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

$id = $_GET['id'];
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
 	if(ubah($_POST) > 0) {
 		echo "<script>
 					alert('Data berhasil diubah!');
 					document.location.href = 'admin.php';
 				</script>";
 	} else {
 		echo "<script>
 					alert('Data gagal diubah!');
 					document.location.href = 'admin.php';
 				</script>";
 	}
 } 
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Form Ubah Data Makanan</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		body {
			background-color: #2c3133;
		}
		.container{
			text-align: center;
			color: white;
		}
	</style>
</head>
<body>
	<div class="container">
	<h3>Form Ubah Data Makanan</h3>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" id="id" value="<?= $mkn['id']; ?>">
		<div class="form-group">
    		<label for="img">Pilih Gambar</label>
   			 <input type="file" class="form-control" id="img" name="img" required>
 		 </div>
			<div class="form-group">
    		<label for="namamkn">Nama Makanan</label>
   			 <input type="text" class="form-control" id="namamkn" name="namamkn" required value="<?= $mkn['nama_makanan']; ?>">
 		 </div>
			<div class="form-group">
    		<label for="asalmkn">Asal Makanan</label>
   			 <input type="text" class="form-control" id="asalmkn" name="asalmkn" required value="<?= $mkn['asal_makanan']; ?>">
 		 </div>
			<div class="form-group">
    		<label for="thn">Tahun Dibuat</label>
   			 <input type="text" class="form-control" id="thn" name="thn" required value="<?= $mkn['tahun_dibuat']; ?>">
 		 </div>
			<div class="form-group">
    		<label for="bhnmkn">Bahan Utama</label>
   			 <input type="text" class="form-control" id="bhnmkn" name="bhnmkn" required value="<?= $mkn['bahan_utama']; ?>">
 		 </div>
			<button class="btn btn-success" type="submit" name="ubah">Ubah Data</button>
			<button class="btn btn-primary" type="submit">
				<a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>