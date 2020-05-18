<?php 
	//array asosiative

	$mahasiswa = array ("Nama" => "Wahyu",
	 "Nrp" => "193040112",
	 "Alamat" => "Kuningan",
	 "Usia" => "19 Tahun");
	 echo $mahasiswa["Nama"];
	 echo "<br>".$mahasiswa["Nrp"];
	 echo "<br>".$mahasiswa["Alamat"];
	 echo "<br>".$mahasiswa["Usia"];

	 //array biasa
	 $mahasiswa = array ("Wahyu");
	 echo "<br>".$mahasiswa [0];
	 ?>