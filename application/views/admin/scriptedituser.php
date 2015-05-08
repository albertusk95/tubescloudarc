<?php  
	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect, "codeigniter") or die("Database tidak ditemukan");
		
		if (mysqli_connect_error())
		{
			echo "Koneksi gagal!: " . mysqli_connect_error();
		}
	$id = $_POST['idbaru']; 
	$username = $_POST['usernamebaru'];  
	$password = $_POST['passwordbaru'];   
   
	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect, "codeigniter") or die("Database tidak ditemukan");
	$query = "UPDATE login_session set username='$username', password='$password', level='$username' where id='$id'";  
	$hasil = mysqli_query($connect,$query);  
	
		if($hasil)
		{  
			echo "Edit user berhasil!";  
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
		else
		{  
			echo "Error! Edit user gagal!".mysqli_error();  
		}  
?>  