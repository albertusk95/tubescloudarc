<?php  
	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect, "codeigniter") or die("Database tidak ditemukan");
		
		if (mysqli_connect_error())
		{
			echo "Koneksi gagal!: " . mysqli_connect_error();
		}
		$id = $id_value;
		$delete = mysqli_query($connect, "DELETE FROM login_session where id=$id");
		
		if ($delete) {
			echo "<script>alert('Delete user berhasil!');history.go(-1);</script>";
			
			$query = "SELECT * FROM login_session ORDER BY id";
			$hasil = mysqli_query($connect,$query);
			$nomor = 1;
			while ($indeks_nomor = mysqli_fetch_array($hasil))
			{
				$id = $indeks_nomor['id'];
				$query2 = "UPDATE login_session SET id=$nomor WHERE id=$id";
				mysqli_query($connect,$query2);
				$nomor = $nomor + 1;
			}
			$query = "ALTER TABLE login_session AUTO_INCREMENT = $nomor";
			mysqli_query($connect,$query);
			
		} 
		else {
			echo "<script>alert('Delete user gagal!');history.go(-1);</script>";
		}
?>
		