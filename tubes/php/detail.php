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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Detail Makanan</title>
	<link rel="stylesheet" href="../css/style.css">
	<style>
		body {
			background-color: #2c3133;
		}
		.container {
			margin: 50px auto 10px auto;
			color: white;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="card mb-3 bg-dark" style="max-width: 900px;">
  		<div class="row">
   		 <div class="col-md-4">
      <img class="gambarindex" src="../assets/img/<?= $makanan['img']; ?>" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $makanan['nama_makanan']; ?></h5>
        <p class="card-text">Asal Makanan: <?= $makanan['asal_makanan']; ?></p>
        <p class="card-text">Tahun Dibuat: <?= $makanan['tahun_dibuat']; ?></p>
        <p class="card-text">Bahan Utama: <?= $makanan['bahan_utama']; ?></p>
      			</div>
    		</div>
  		</div>
	</div>
		<button class="btn btn-secondary"><a class="a" href="../index.php">Kembali</a></button>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

