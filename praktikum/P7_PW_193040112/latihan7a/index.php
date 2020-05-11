<?php 
	//menghubungkan dengan file php lainnya

	require 'php/functions.php';

	//melakukan query
	$makanan = query("SELECT * FROM makanan")
	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Index</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>SELAMAT DATANG</h1>
	<?php foreach ($makanan as $mkn) : ?>
		<p class="nama">
			<img class="gambarindex" src="assets/img/<?= $mkn["img"]; ?>" alt="">
			<a href="php/detail.php?id=<?= $mkn['id'] ?>">
				<?= $mkn["nama_makanan"] ?>
			</a>
		</p>
	<?php endforeach; ?>
	<a href="php/login.php?id=">
		<button>Masuk ke halaman admin</button>
	</a>
</body>
</html>