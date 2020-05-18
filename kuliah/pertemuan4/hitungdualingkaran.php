<?php 

	$jari1 = 10;
	$jari2 = 10;

	function hitungluasdualingkaran($jari){
		$luas = 3.14*$jari*$jari;
		return $luas;	
	}

	function hitungdualingkaran($luas1, $luas2){
		$total_luas_lingkaran = $luas1+$luas2;
		return $total_luas_lingkaran;
	}	

	$luas_lingkaran1 = hitungluasdualingkaran($jari1);

	$luas_lingkaran2 = hitungluasdualingkaran($jari2);

	echo "Total Luas Dua Lingkaran = ".hitungdualingkaran($luas_lingkaran1,$luas_lingkaran2);

	 ?>	
