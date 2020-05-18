<?php 
	//menghubungkan dengan file php lainnya

	require 'php/functions.php';

	//melakukan query
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

	<title>Data Makanan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		body {
			background-color: #2c3133;
		}
		.container {
			margin: 50px auto 10px auto;
			color: white;
		}
		.d-block{
			height: 750px;
		}

	</style>
</head>
<body>
	<!-- Navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

 	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	 <ul class="navbar-nav mr-auto">
      <li class="nav-item">
       	 <a class="nav-link" href="php/login.php"><button type="button" class="btn btn-secondary">Masuk</button></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Kolom Pencarian" aria-label="Search" name="keyword">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="cari">Cari</button>
    </form>
 	 </div>
	</nav>
      <!-- Navbar Close -->

	<!-- Carousel -->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/background.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Pilihlah Makanan Kesukaan Anda</h5>
        <p>Pilihlah Makanan Yang Bergizi dan Bervitamin</p>
      </div>
    </div>
  </div>
  <!-- Close Carousel -->

 		 <!-- Data -->
 	<div class="container">
 		<?php foreach ($makanan as $mkn) : ?>
	<div class="card mb-3 bg-dark" style="max-width: 800px;">
  		<div class="row">
   		 <div class="col-md-4">
      <img class="gambarindex" src="assets/img/<?= $mkn['img']; ?>" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $mkn['nama_makanan']; ?></h5>
        <a href="php/detail.php?id=<?= $mkn['id'] ?>" class="btn btn-secondary">Lihat Detail</a>
      		</div>
    		</div>
  		</div>
	</div>
	<?php endforeach; ?>
	</div>	
     <!-- Close Data -->
	
	
	

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>