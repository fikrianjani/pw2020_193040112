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
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Halaman Administrator</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		body {
			background-color: #2c3133;
		}
		.container{
			text-align: center;
			margin: 100px auto 10px auto;
			color: white;
		}
	</style>
</head>
<body>
	<!-- Navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

 	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	 <ul class="navbar-nav mr-auto">
      <li class="nav-item">
       	 <a class="nav-link" href="logout.php"><button type="button" class="btn btn-outline-danger">Logout</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambah.php"><button type="button" class="btn btn-outline-success">Tambah Data</button></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Kolom Pencarian" aria-label="Search" name="keyword">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="cari">Cari</button>
    </form>
  </div>
</nav>


      <!-- Navbar Close -->
   <div class="container">
	<table class="tabel" border="2" cellpadding="15" cellspacing="0">
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
					<a href="ubah.php?id=<?= $mkn['id'] ?>"><button type="button" class="btn btn-success">Ubah</button></a>
					<a href="hapus.php?id=<?= $mkn['id'] ?>" onclick="return confirm('Hapus Data?')"><button type="button" class="btn btn-danger">Hapus</button></a>
				</td>
				<td><img class="gambaradmin" src="../assets/img/<?= $mkn['img']; ?>" alt=""></td>
				<td><?= $mkn['nama_makanan']; ?></td>
				<td><?= $mkn['asal_makanan']; ?></td>
				<td><?= $mkn['tahun_dibuat']; ?></td>
				<td><?= $mkn['bahan_utama']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php endif; ?>
	</table>
	</div>

	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>