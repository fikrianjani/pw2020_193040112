<?php 
session_start();
require 'functions.php';
//melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
	header("Location: admin.php");
	exit;
}
//Login
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	// mencocokan USERNAME dan password
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256', $row['id'], false);
		}
		if (hash('sha256', $row['id']) == $_SESSION['hash']) {
			header("Location: admin.php");
			die;
		}
		header("Location: ../index.php");
		die;
	}
	$error = true;
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

	<title>Login Administrator</title>
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
	<form action="" method="post">
		<?php if (isset($error)) : ?>
			<p style="color: darkgrey; font-style: italic;">Username atau Password salah</p>
		<?php endif; ?>
		<div class="container">
  		<div class="form-group">
   		 <label for="username">Username</label>
  		  <input type="text" class="form-control" id="username" name="username">
 		</div>
 		 <div class="form-group">
  		  <label for="password">Password</label>
   		 <input type="password" class="form-control" id="password" name="password">
 		 </div>
		  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="remember" name="remember">
 	   <label class="form-check-label" for="remember">Ingat Saya</label>
 	 	</div>
 	 	<button type="submit" class="btn btn-primary" name="submit">Login</button>
		</form>
		<br><br><small id="username" class="form-text text-muted">user/pass: admin</small>
	<br>
	<div class="registrasi">
		<p>Belum Punya Akun? Registrasi <a href="registrasi.php">Disini</a></p>
	</div>
	</div>

	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>