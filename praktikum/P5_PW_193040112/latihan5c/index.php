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
	<title>Latihan 5c</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Selamat Datang</h1>
	<?php foreach ($makanan as $mkn) : ?>
		<p class="nama">
			<img class="gambaridx" src="assets/img/<?= $mkn["img"]; ?>" alt="">
			<a class="b" href="php/detail.php?id=<?= $mkn['id'] ?>">
				<?= $mkn["nama_makanan"] ?>
			</a>
		</p>
	<?php endforeach; ?>
</body>
</html>