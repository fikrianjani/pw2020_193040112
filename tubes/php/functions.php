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

		$namamakanan = htmlspecialchars($data['namamkn']);
		$asalmakanan = htmlspecialchars($data['asalmkn']);
		$tahundibuat = htmlspecialchars($data['thn']);
		$bahanmakanan = htmlspecialchars($data['bhnmkn']);

		$img = upload();

		$query = "INSERT INTO makanan
						VALUES 
						('','$img','$namamakanan','$asalmakanan','$tahundibuat','$bahanmakanan')";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function hapus($id) 
	{
		$conn = koneksi();
		mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

	function ubah($data)
	{
		$conn = koneksi();
		$id = htmlspecialchars($data['id']);
		$img = upload();
		$namamakanan = htmlspecialchars($data['namamkn']);
		$asalmakanan = htmlspecialchars($data['asalmkn']);
		$tahundibuat = htmlspecialchars($data['thn']);
		$bhnmkn = htmlspecialchars($data['bhnmkn']);

		$query = "UPDATE makanan 
				SET 
				img = '$img',
				nama_makanan = '$namamakanan',
				asal_makanan = '$asalmakanan',
				tahun_dibuat = '$tahundibuat',
				bahan_utama = '$bhnmkn'
				WHERE id = $id";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function upload() 
	{
		$namaFile = $_FILES['img']['name'];
		$ukuranFile = $_FILES['img']['size'];
		$tmpName = $_FILES['img']['tmp_name'];

		move_uploaded_file($tmpName, '../assets/img/'.$namaFile);
		return $namaFile;		
	}

	function registrasi($data)
	{
		$conn = koneksi();
		$username = strtolower(stripcslashes($data['username']));
		$password = mysqli_real_escape_string($conn, $data['password']);

		//cek username sudah ada atau belum
		$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('Username sudah digunakan');
				</script>";
			return false;
		}

		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambah user baru
		$query_tambah = "INSERT INTO user VALUES('','$username','$password')";
		mysqli_query($conn, $query_tambah);

		return mysqli_affected_rows($conn);
	}
?>