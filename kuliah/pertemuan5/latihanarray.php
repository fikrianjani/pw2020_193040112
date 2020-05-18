<?php 
	
	// 

echo "<br>";


	$arah = array ("Kanan","Kiri");

	$arah[2] = "Atas";

	$arah[] = "Bawah";

	$arah[1] = "Kanan";

	$arah[0] = "Kiri";
	print_r($arah);
	echo "<br>";
	echo "Panjang Array = ".count($arah);
	echo "<br>";

	for ($i=0; $i<count($arah); $i++) {
		echo "Arah = ".$arah[$i];
		echo "<br>";
	}

	echo "<br>";

	$i=0;
	foreach ($arah as $namaarah) {
		echo $namaarah;
		echo "<br>"
	}

	// Array MultiDimensi

	// $mahasiswa = array();
	// $mahasiswa[0][0] = "193040112";
	// $mahasiswa[0][1] = "Fikri Anjani";
	// $mahasiswa[1][0] = "Kuningan";
	// $mahasiswa[1][1] = "089525103503";

	// print("<pre>".print_r($mahasiswa, true)."</pre>");

	// echo "Nama :".$mahasiswa[0][1];
	// echo "<br>";
	// echo "Kota :".$mahasiswa[1][0];

	// for ($i = 0;$i < count($mahasiswa); $i++) {
	// 	for ($j=0; $j <= $i; j++) {
	// 		echo $mahasiswa[$i][$j];
	// 	}
	// }
 ?>