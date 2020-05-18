<?php 

	$nilai = 10;
	$hasil = ($nilai%2 == 0)? "Genap":"Ganjil"

	echo $hasil;

	if(($nilai%2) == 1 ) {
		echo "Ganjil";
	}else{
		echo "Genap";
	}

	$nilai = 51;
	if (( $nilai%2 ) == 1 ) {
	echo "Ganjil";
	 }else{
	 	echo "Genap";
	 } 


	$warna_lampu = "hijau";

	if($warna_lampu == "Merah"){
		echo "Berhenti";
	}elseif ($warna_lampu == "Kuning") {
		echo "Bersiap";
	}elseif ($warna_lampu == "Hijau") {
		echo "Maju";
	}else{
		echo "Warna Tidak Dikenal";
	}

	$hari = 1;

	if($hari =1) {
		echo "Hari Minggu | Dari IF";
	}elseif($hari = 2)
	echo "<br>";

	switch ($hari) {
		case '1':
			echo " Hari Minggu | Dari Switch";
			break;
		
		default:
			echo "Hari Tidak Dikenal";
			break;
	}


?>