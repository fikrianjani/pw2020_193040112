<?php 
echo "Ini adalah tampilan hasil";
echo "<hr>";
// echo "Username: ".$_GET['username']."<br>";
// echo "Password: ".$_GET['password'];

function ceklogin($username,$password) {
	if ($username == "fikri" && $password == "12345678") {
		echo "Berhasil Login";
	} else {
		echo "Gagal Login";
	}
}


		//eksekusi
		//------------
		$username = $_GET['username'];
		$password = $_GET['password'];
		ceklogin($username,$password);

 // echo "Hasil Pertambahan: ";
 // // echo $_GET['pertambahan1']+$_GET['pertambahan2'];
 // function tambah ($pertambahan1,$pertambahan2) {
 // 	 echo $pertambahan1 + $pertambahan2;
 // }

 // $pertambahan1 = $_GET['pertambahan1'];
 // $pertambahan2 = $_GET['pertambahan2'];
 // tambah($pertambahan1,$pertambahan2);

	 ?>