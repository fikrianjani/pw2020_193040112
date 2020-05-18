<?php 
	$mahasiswa = [
		array("1" => "193040001","Jaenudin","28-08-2000","Rancaekek","08657482472","Buku"),
		array("2" => "193040002","Abdul","29-07-2001","Ujung Berung","084927492474","Film"),
		array("3" => "193040003","Arya","06-01-1999","Indramayu","08963637393","Mobil"),
		array("4" => "193040004","Akil","31-12-2000","Buah Batu","082183627392","Smartphone"),
		array("5" => "193040005","Rhivan","15-04-2002","Dipatiukur","082474927292","Peralatan elektronik"),
		array("6" => "193040006","Fauzi","18-08-2000","Setiabudi","08572847242","Buku"),
		array("7" => "193040007","Somad","09-09-1999","Lembang","087183682632","Film"),
		array("8" => "193040008","Azis","20-06-2001","Cirebon","086386638133","Mobil"),
		array("9" => "193040009","Ilham","13-12-2000","Cimahi","083638238279","Smartphone"),
		array("10" => "193040010","Dilan","17-08-1999","Cibiru","087396381713","Peralatan elektronik")

		];
	
	echo "<table border = '1' cellpadding ='5' cellspacing = '0'> ";
	echo "<tr bgcolor = 'grey'><th>NRP</th><th>Nama Mahasiswa</th><th>Tanggal Lahir</th><th>Alamat</th><th>Nomor Telepon</th><th>Kategori</th></tr>";
	foreach ($mahasiswa as $rows => $row) {
		echo "<tr>";
		foreach ($row as $col => $cell) {
			echo "<td> $cell </td>";
		}
	}
	
	

?>