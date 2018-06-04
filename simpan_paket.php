<html>
<head>
<title>Login Website</title>

<?php
	$konek = new mysqli("localhost","root","","justdoeat");
	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	$jumlah = $_POST['jumlah'];
	$email = $_POST['email'];
	$sql = "insert into paket(jumlah, email) values ('$jumlah','$email')";
	if($konek->query($sql)){
		echo "<a href='contact.php'>Coba Cek</a>";
	}
	else{
		echo "Database Tidak Berhasil di Buat karena ".$konek->error;
	}
	$konek->close();
?>

</html>