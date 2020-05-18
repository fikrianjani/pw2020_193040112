<?php 

	//kubus pertama
	$sisi1 = 9;
	//kubus kedua
	$sisi2 = 4;

	//Luas ke 1
	$luas_kubus1 = $sisi1*$sisi1*6;

	//Luas ke 2
	$luas_kubus2 = $sisi2*$sisi2*6;

	// $total_luas = $luas_kubus1 + $luas_kubus2;
	// echo "Total Luas : ".$total_luas;

	function hitungluaskubus($sisi){
		$luas = $sisi*$sisi*6;
		return $luas;
	}

	echo "Total Luas = ".tambahluas2kubus($luas_kubus1,$luas_kubus2);

	function tambahluas2kubus($luas1, $luas2)
	{
		$total_luas = $luas1 + $luas2;
		return $total_luas;
	}
	 ?>