<?php 

	echo "Hasil Pertambahan: ";
	function tambah($pt1,$pt2) {
		echo $pt1+$pt2;
	}

	$pt1 = $_GET['pt1'];
	$pt2 = $_GET['pt2'];
	tambah($pt1,$pt2);
 ?>