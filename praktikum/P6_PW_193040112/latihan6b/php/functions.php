<?php 
	//function untuk melakukan koneksi ke database
	function koneksi() {
		$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke db gagal");
		mysqli_select_db($conn, "pw_193040112") or die ("Database salah");

		return $conn;
	} 

	//function untuk melakukan query ke database
	function query($sql){
		$conn = koneksi();
		$result = mysqli_query($conn, "$sql");

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	function tambah($data)
	{
		$conn = koneksi();

		$img = htmlspecialchars($data['img']);
		$namamakanan = htmlspecialchars($data['namamkn']);
		$asalmakanan = htmlspecialchars($data['asalmkn']);
		$tahundibuat = htmlspecialchars($data['thn']);
		$bahanmakanan = htmlspecialchars($data['bhnmkn']);

		$query = "INSERT INTO makanan
						VALUES 
						('','$img','$namamakanan','$asalmakanan','$tahundibuat','$bahanmakanan')";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

?>