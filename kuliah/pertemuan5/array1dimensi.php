<?php 
	
	$bulan = array ("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

	// menggunakan for
	// for ($a=0;$a<count($bulan); $a++) {
	// 	echo $bulan[$a];
	// 	echo "<br>";
	// }

	//menggunakan foreach
	// foreach ($bulan as $namabulan) {
	// 	echo $namabulan;
	// 	echo "<br>";
	// }

	// print_r($bulan[6]);

	$angka = array(1,2,3,4,5,6);

	echo "<br>";

	$hasil = array_push($angka,7,8,9,10);
	print_r($angka);
	echo "<hr>";

	$hasil = rsort($angka);
	print_r($angka);


 ?>